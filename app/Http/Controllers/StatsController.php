<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CompletedQuestion;
use App\Models\Evaluation;
use App\Models\Group;
use App\Models\Poll;
use App\Models\Teacher;
use App\User;
use Illuminate\Http\Request;
use \DB;
use Barryvdh\DomPDF\Facade as PDF;

class StatsController extends Controller
{
    public function index () {
        $evaluation = Evaluation::where('active', 1)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $groupsIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->pluck('groupId')->toArray();
        $careerIds = Group::whereIn('id', $groupsIds)->groupBy('careerId')->get()->pluck('careerId')->toArray();
        $careers = Career::whereIn('id', $careerIds)->get();

        return view('modules.stats.index')
        ->with('careers', $careers)
        ->with('evaluation', $evaluation);
    }

    public function indexTeachers() {
        $evaluation = Evaluation::where('active', 1)->first();

        return view('modules.stats.teachers')
        ->with('evaluation', $evaluation);
    }

    public function getTeachers(Request $request) {
        $search = $request->search;
        $evaluation = Evaluation::where('active', 1)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $teachersIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->pluck('teacherId')->toArray();
        $query = Teacher::select('id', 'name', 'last_name', 'email')
            ->whereIn('id', $teachersIds)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'LIKE', '%' . $search . '%');
            });

        $total    = $query->count();
        $ignora   = $request->per_page * ($request->page - 1);
        $lastPage = intval(round($total / $request->per_page, 0));
        $lastPage = ($lastPage == 0) ? $lastPage+1 : $lastPage;
        $data     = $query->orderBy($request->column, $request->order)->skip($ignora)->take($request->per_page)->get();

        $response = [
            'data' => $data,
            'meta' => (object) [
                'current_page' => $request->page,
                'from' => $ignora + 1,
                'last_page' => $lastPage,
                'per_page' => $request->per_page,
                'to' => $ignora + $request->per_page,
                'total' => $total
            ],
        ];
        return $response;
    }

    public function getStatsTeacher ($teacherId, $evaluationId) {
        $evaluation = Evaluation::where('id', $evaluationId)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $groupsTeachersIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->where('teacherId', $teacherId)
        ->where('tutoria', 0)->pluck('id')->toArray();
        $pollsIds = Poll::whereIn('groupteacherId', $groupsTeachersIds)->pluck('id')->toArray();

        $groupsTeachersTutoriaIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->where('teacherId', $teacherId)
        ->where('tutoria', 1)->pluck('id')->toArray();
        $pollsTuroriasIds = Poll::whereIn('groupteacherId', $groupsTeachersTutoriaIds)->pluck('id')->toArray();

        $answers = CompletedQuestion::leftJoin('questions', 'questions.id', 'completed_question.questionId')
        ->selectRaw('count(completed_question.id), sum(completed_question.score) as sum, questions.name')
        ->whereIn('completed_question.pollId', $pollsIds)
        ->where('questions.type', 1)
        ->groupBy('completed_question.questionId')->get();

        $answersTutorias = CompletedQuestion::leftJoin('questions', 'questions.id', 'completed_question.questionId')
        ->selectRaw('count(completed_question.id), sum(completed_question.score) as sum, questions.name')
        ->whereIn('completed_question.pollId', $pollsTuroriasIds)
        ->where('questions.type', 1)
        ->groupBy('completed_question.questionId')->get();

        dd($answers, $answersTutorias);
        $groupIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->where('teacherId', $teacherId)->pluck('groupId')->toArray();
        $groups = Group::whereIn('id', $groupIds)->with('career')->get();
        $data = [ 'answers' => $answers, 'groups' => $groups];
        $pdf = PDF::loadView('modules.stats.stats',$data);
        return $pdf->stream('evaluacion.pdf');
       /*  $pdf = PDF::loadView('modules.stats.stats', $data);
        return $pdf->download('invoice.pdf'); */
    }

    public function careerInfo ($careerId, $evaluationId) {
        $evaluation = Evaluation::where('id', $evaluationId)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $groupsIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->pluck('groupId')->toArray();
        $groupsIds = Group::whereIn('id', $groupsIds)->where('careerId', $careerId)->get()->pluck('id')->toArray();
        $students = User::leftjoin('completed_eval', 'completed_eval.studentId', 'users.id')
        ->leftjoin('groups_students', 'groups_students.studentId', 'users.id')
        ->whereIn('groups_students.groupId', $groupsIds)
        ->select('users.name', 'users.studentId', 'users.last_name', 'completed_eval.id as completedId')
        ->get();
        $career = Career::where('id', $careerId)->first();
        $data = [ 'students' => $students, 'career' => $career];
        $pdf = PDF::loadView('modules.stats.stats',$data);
        return $pdf->stream('evaluacion.pdf');
       /*  $pdf = PDF::loadView('modules.stats.stats', $data);
        return $pdf->download('invoice.pdf'); */
    }

    public function dinamicCareerInfo ($evaluationId, $careerId) {
        $careerIds = explode('-',$careerId);
        $evaluation = Evaluation::where('id', $evaluationId)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $groupsIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->pluck('groupId')->toArray();
        $groupsIds = Group::whereIn('id', $groupsIds)->whereIn('careerId', $careerIds)->get()->pluck('id')->toArray();
        $students = User::leftjoin('completed_eval', 'completed_eval.studentId', 'users.id')
        ->leftjoin('groups_students', 'groups_students.studentId', 'users.id')
        ->whereIn('groups_students.groupId', $groupsIds)
        ->select('users.name', 'users.studentId', 'users.last_name', 'completed_eval.id as completedId')
        ->get();
        $careers = Career::whereIn('id', $careerIds)->get();
        $data = [ 'students' => $students, 'careers' => $careers];
        $pdf = PDF::loadView('modules.stats.dinamicStats',$data);
        return $pdf->stream('evaluaciones.pdf');
       /*  $pdf = PDF::loadView('modules.stats.stats', $data);
        return $pdf->download('invoice.pdf'); */
    }
}
