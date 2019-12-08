<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Evaluation;
use App\Models\Group;
use App\Models\Poll;
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
        return $pdf->stream('ticket.pdf');
       /*  $pdf = PDF::loadView('modules.stats.stats', $data);
        return $pdf->download('invoice.pdf'); */
    }
}
