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

    public function getTeachers0(Request $request) {
        $search = $request->search;
        $evaluation = Evaluation::where('active', 1)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $query = DB::table('groups_teachers')->whereIn('groups_teachers.id', $groupTeachersIds)
        ->join('groups', 'groups.id', 'groups_teachers.groupId')
        ->distinct('groups_teachers.teacherId')
        ->join('careers', 'careers.id', 'groups.careerId')
        ->join('teachers', 'teachers.id', 'groups_teachers.teacherId')
        ->where('groups_teachers.tutoria', 0)
        ->where('careers.type', 3)
        ->select('teachers.id','teachers.name as name', 'teachers.last_name', 'teachers.email', DB::raw('"1" AS type'));

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

    public function getTeachers1(Request $request) {
        $search = $request->search;
        $evaluation = Evaluation::where('active', 1)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $query = DB::table('groups_teachers')->whereIn('groups_teachers.id', $groupTeachersIds)
        ->distinct('groups_teachers.teacherId')
        ->leftjoin('groups', 'groups.id', 'groups_teachers.groupId')
        ->leftjoin('careers', 'careers.id', 'groups.careerId')
        ->leftjoin('teachers', 'teachers.id', 'groups_teachers.teacherId')
        ->where('groups_teachers.tutoria', 0)
        ->where('careers.type', '!=', 3)
        ->select('teachers.id','teachers.name as name', 'teachers.last_name', 'teachers.email', DB::raw('"0" AS type'));

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

    public function getStatsTeacher ($teacherId, $evaluationId, $tipo = 0) {

        $evaluation = Evaluation::where('id', $evaluationId)->first();
        $groupTeachersIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $groupsTeachersIds = DB::table('groups_teachers')->whereIn('groups_teachers.id', $groupTeachersIds)->where('groups_teachers.teacherId', $teacherId)
        ->leftjoin('groups', 'groups.id', 'groups_teachers.groupId')
        ->leftjoin('careers', 'careers.id', 'groups.careerId');
        if ($tipo == 1) {
            $groupsTeachersIds = $groupsTeachersIds->where('careers.type', '!=', 3);
        } else if($tipo == 0) {
            $groupsTeachersIds = $groupsTeachersIds->where('careers.type', 3);
        }
        $groupsTeachersIds = $groupsTeachersIds->where('groups_teachers.tutoria', 0)->pluck('groups_teachers.id')->toArray();
        $pollsIds = Poll::whereIn('groupteacherId', $groupsTeachersIds)->pluck('id')->toArray();

        $groupsTeachersTutoriaIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)->where('teacherId', $teacherId)
        ->where('tutoria', 1)->pluck('id')->toArray();
        $pollsTuroriasIds = Poll::whereIn('groupteacherId', $groupsTeachersTutoriaIds)->pluck('id')->toArray();

        $answers = CompletedQuestion::leftJoin('questions', 'questions.id', 'completed_question.questionId')
        ->selectRaw('count(completed_question.id) as totalStudents, sum(completed_question.score) as sum, questions.name')
        ->whereIn('completed_question.pollId', $pollsIds)
        ->where('questions.type', 1)
        ->groupBy('completed_question.questionId')->get();

        $answersOpen = CompletedQuestion::leftJoin('questions', 'questions.id', 'completed_question.questionId')
        ->select('questions.name', 'completed_question.score')
        ->whereIn('completed_question.pollId', $pollsIds)
        ->where('questions.type', 2)->get();

        $answersTutorias = CompletedQuestion::leftJoin('questions', 'questions.id', 'completed_question.questionId')
        ->selectRaw('count(completed_question.id) as totalStudents, sum(completed_question.score) as sum, questions.name')
        ->whereIn('completed_question.pollId', $pollsTuroriasIds)
        ->where('questions.type', 1)
        ->groupBy('completed_question.questionId')->get();

        $answersTutoriasOpen = CompletedQuestion::leftJoin('questions', 'questions.id', 'completed_question.questionId')
        ->select('questions.name', 'completed_question.score')
        ->whereIn('completed_question.pollId', $pollsTuroriasIds)
        ->where('questions.type', 2)->get();

        // dd($answers, $answersTutorias);
        $groupIds = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)
        ->where('tutoria', 0)
        ->where('teacherId', $teacherId)->pluck('groupId')->toArray();
        if ($tipo == 1) {
            $groups = Group::whereIn('groups.id', $groupIds)
            ->join('careers', 'careers.id', 'groups.careerId')
            ->where('careers.type', '!=', 3)->get();
        } else {
            $groups = Group::whereIn('groups.id', $groupIds)
            ->join('careers', 'careers.id', 'groups.careerId')
            ->where('careers.type', '=', 3)->get();
        }
        $careersIds = $groups->pluck('careerId')->toArray();
        $careers = Career::whereIn('id', $careersIds)->get();
        if ($tipo == 1) {
            $careers = Career::whereIn('id', $careersIds)->where('type', '!=', 3)->get();
        } else {
            $careers = Career::whereIn('id', $careersIds)->where('type', 3)->get();
        }
        //dd($careers);

        $teacher = Teacher::where('id', $teacherId)->first();

        $groupsTeachersTutoria = DB::table('groups_teachers')->whereIn('id', $groupTeachersIds)
        ->where('teacherId', $teacherId)
        ->where('tutoria', 1)->pluck('groupId')->toArray();
        $groupsTutoria = Group::whereIn('id', $groupsTeachersTutoria)->get();
        $careersIds = $groupsTutoria->pluck('careerId')->toArray();
        $careersTutoria = Career::whereIn('id', $careersIds)->get();
        //dd($careersTutoria,1);
        /* if ($answersTutorias->count() == 0 && $answers->count() == 0) {
            return redirect('./');
        } */
        //$data = ['answersOpen' => $answersOpen, 'answersTutoriasOpen' => $answersTutoriasOpen, 'careersTutoria' => $careersTutoria, 'careers' => $careers, 'teacher' => $teacher, 'answers' => $answers, 'answersTutorias' => $answersTutorias, 'groups' => $groups, 'groupsTutoria' => $groupsTutoria];

        //$view =  \View::make('modules.stats.teachers-stats', compact(['answersOpen','answersTutoriasOpen','careersTutoria','careers','teacher','answers','answersTutorias','groups','groupsTutoria']))->render();
        $total = 0.0;
        $questionsGraph[] = ['Num', 'Valor'];
        if ($answers->count() > 0) {
            foreach ($answers as $key => $answer) {
                $total +=  number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                $answer->total =  number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                $questionsGraph[++$key] = [$key.'', (float)$answer->total];
            }
            $total = number_format((float)($total / $answers->count()), 2, '.', '');
        }

        $questionsGraphTuto[] = ['Num', 'Valor'];
        $total2 = 0.0;
        if ($answersTutorias->count() > 0) {
            foreach ($answersTutorias as $key => $answer) {
                $total2 +=  number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                $answer->total =  number_format((float)($answer->sum) / $answer->totalStudents, 2, '.', '');
                $questionsGraphTuto[++$key] = [$key.'', (float)$answer->total];
            }

            $total2 = number_format((float)($total2 / $answersTutorias->count()), 2, '.', '');
        }


        return view('modules.stats.teachers-print-stats')
        ->with('questionsGraph', json_encode($questionsGraph))
        ->with('questionsGraphTuto', json_encode($questionsGraphTuto))
        ->with('answersOpen', $answersOpen)
        ->with('answersTutoriasOpen', $answersTutoriasOpen)
        ->with('careersTutoria', $careersTutoria)
        ->with('careers', $careers)
        ->with('teacher', $teacher)
        ->with('answers', $answers)
        ->with('answersTutorias', $answersTutorias)
        ->with('groups', $groups)
        ->with('groupsTutoria', $groupsTutoria)
        ->with('total', $total)
        ->with('total2', $total2)
        ;

        $pdf = PDF::loadView('modules.stats.teachers-stats',$data);
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
