<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Evaluation;
use App\Models\Group;
use App\Models\Poll;
use App\User;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index () {
        $evaluation = Evaluation::where('active', 1)->first();
        $groupsIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $careerIds = Group::whereIn('id', $groupsIds)->groupBy('careerId')->get()->pluck('careerId')->toArray();
        $careers = Career::whereIn('id', $careerIds)->get();

        return view('modules.stats.index')
        ->with('careers', $careers)
        ->with('evaluation', $evaluation);
    }

    public function careerInfo ($careerId, $evaluationId) {
        $evaluation = Evaluation::where('id', $evaluationId)->first();
        $groupsIds = Poll::where('evaluationId', $evaluation->id)->pluck('groupTeacherId')->toArray();
        $groups = Group::whereIn('id', $groupsIds)->where('careerId', $careerId)->get()->pluck('id')->toArray();
        dd($groups);
        return 0;
    }
}
