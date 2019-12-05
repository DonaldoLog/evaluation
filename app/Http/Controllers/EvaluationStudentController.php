<?php

namespace App\Http\Controllers;

use App\Models\Completed;
use App\Models\CompletedQuestion;
use App\Models\Evaluation;
use App\Models\Poll;
use App\Models\Question;
use App\Models\Form;
use App\Models\Group;
use App\Models\Career;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;
use Illuminate\Support\Facades\DB;

class EvaluationStudentController extends Controller
{
    public function index () {
        $student = User::where('id', Auth::user()->id)->with('groups')->first();
        $groupIds = Group::whereHas('students', function($q) use ($student){
            $q->where('groups_students.studentId', $student->id);
        })->pluck('id')->toArray();
        $teachers = Poll::join('groups_teachers', 'groups_teachers.id', 'polls.groupTeacherId')
        ->join('teachers', 'teachers.id', 'groups_teachers.teacherId')
        ->join('groups', 'groups.id', 'groups_teachers.groupId')
        ->join('careers', 'careers.id', 'groups.careerId')
        ->select('polls.id', 'teachers.name', 'teachers.last_name', 'groups_teachers.subject', 'groups_teachers.id as groupTeacherId', 'polls.deleted_at', 'groups.name as group', 'careers.name as career')
        ->whereNull('teachers.deleted_at')
        ->whereNull('polls.deleted_at')
        ->whereIn('groups_teachers.groupId', $groupIds)->get();

        $pollsCompleted = Completed::where('studentId', $student->id)->pluck('pollId');
        $groupTeacherIdsCompleted = Poll::whereIn('id', $pollsCompleted)->get()->pluck('id')->toArray();
        /* $teacherCompleted = Teacher::whereHas('groups', function($q) use ($groupTeacherIdsCompleted){
            $q->whereIn('groups_teachers.id', $groupTeacherIdsCompleted);
        })
        ->pluck('id')->toArray(); */

        foreach ($teachers as $teacher) {
            if (in_array($teacher->id, $groupTeacherIdsCompleted)) {
                $teacher->completed = true;
            } else {
                $teacher->completed = false;
            }
        }
        if ($teachers->count() != 0) {
            $done = $teachers->count() == sizeof($groupTeacherIdsCompleted);
        } else {
            $done = false;
        }
        /* $questions = Form::where('id', $evaluation->formId)->with('questions')->get();
        dd($student,$teachers, $groupTeacherIdsCompleted, $questions); */
        //dd($teachers, $groupTeacherIdsCompleted);
        return view('modules.evaluation.index')
        ->with('teachers', $teachers)
        ->with('done', $done);
    }

    public function getQuestions ($pollId) {
        $completed = Completed::where('pollId', $pollId)->where('studentId', Auth::user()->id)->first();
        if ($completed) {
            return redirect('/evaluation/index');
        }
        $teacher = Poll::join('groups_teachers', 'groups_teachers.id', 'polls.groupTeacherId')
        ->join('teachers', 'teachers.id', 'groups_teachers.teacherId')
        ->join('groups', 'groups.id', 'groups_teachers.groupId')
        ->join('careers', 'careers.id', 'groups.careerId')
        ->select('polls.id', 'teachers.name', 'teachers.last_name', 'groups_teachers.subject', 'groups_teachers.groupId', 'groups_teachers.tutoria', 'groups.name as group', 'careers.name as career')
        ->whereNull('teachers.deleted_at')
        ->where('polls.id', $pollId)->first();

        $type = Group::where('id', $teacher->groupId)->first()->career->type;
        $evaluation = Evaluation::where('active', 1)->first();
        if ($teacher->tutoria == 1) {
            $questions = Form::where('id', $evaluation->formId2)->with('questions')->first()->questions;
        } else if ($type == 1) {//esc
            $questions = Form::where('id', $evaluation->formId1)->with('questions')->first()->questions;
        } else if ($type == 3){//online
            $questions = Form::where('id', $evaluation->formId3)->with('questions')->first()->questions;
        }

        return view('modules.evaluation.questions')
        ->with('questions', $questions)
        ->with('evaluation', $evaluation)
        ->with('teacher', $teacher);
    }

    public function storeAnswers(Request $request) {
        DB::beginTransaction();
        try {
            $studentId = Auth::user()->id;
            $exist = Completed::where('studentId', $studentId)->where('pollId', $request->poll['id'])->first();
            if ($exist) {
                DB::rollback();
                return response()->json(['success' => false, 'message' => 'Ya has completado esta evaluación.']);
            }
            $data = array();
            foreach ($request->questions as $key => $question) {
                array_push($data, ['score' => $question['score'],
                    'questionId' => $question['id'],
                    'pollId' => $request->poll['id'],
                    'studentId' => $studentId,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_at' => date('Y-m-d H:i:s')
                ]);
            }
            CompletedQuestion::insert($data);

            $completed = new Completed();
            $completed->studentId = $studentId;
            $completed->pollId = $request->poll['id'];
            $completed->save();



            DB::commit();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }

    }
}
