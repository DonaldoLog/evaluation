<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation;
use App\Models\Form;
use App\Models\Group;
use App\Models\Teacher;
use App\Models\Poll;
use \Log;
use DB;
use Carbon\Carbon;
class EvaluationController extends Controller
{
    public function index(){
        $forms = Form::all();
        return view('modules.evaluations.index')
        ->with('forms', $forms);
    }

    public function store(Request $request) {
        DB::beginTransaction();
        try {
            $exist = Evaluation::where('name', $request->evaluation['name'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta evaluacion.']);
            }
            Evaluation::where('active', 1)->update(['active' => 0]);
            Poll::whereNull('deleted_at')->update(['deleted_at' => Carbon::now()]);
            $evaluation = new Evaluation();
            $evaluation->name = $request->evaluation['name'];
            $evaluation->active = 1;
            $evaluation->formId = $request->form['id'];
            $evaluation->save();

            $groups = Group::get()->pluck('id');
            $gts = DB::table('groups_teachers')->whereIn('groupId', $groups)->get();
            foreach ($gts as $key => $gt) {
                $poll = new Poll();
                $poll->groupTeacherId = $gt->id;
                $poll->evaluationId = $evaluation->id;
                $poll->save();
            }
            $polls = new Poll();

            DB::commit();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            DB::rollback();
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getEvaluations(Request $request) {
        $search = $request->search;
        $query = Evaluation::select('id', 'name')
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

    public function getEvaluation ($evaluationId) {
        try {
            $evaluation = Evaluation::where('id', $evaluationId)->with('form')->first();
            if ($evaluation) {
                return response()->json(['success' => true, 'evaluation' => $evaluation], 200);
            }
            return response()->json(['success' => false, 'message' => 'Evaluacion no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateEvaluation (Request $request) {
        try {
            $exist = Evaluation::where('name', $request->evaluation['name'])
            ->where('id', '!=', $request->evaluation['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta evaluacion.'], 200);
            }
            $evaluation = Evaluation::where('id', $request->evaluation['id'])->first();
            if ($evaluation) {
                $evaluation->name = $request->evaluation['name'];
                $evaluation->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Evaluacion no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyEvaluation (Request $request) {
        try {
            $evaluation = Evaluation::where('id', $request->evaluation['id'])->first();
            if ($evaluation) {
                $evaluation->delete();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Evaluacion no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }
}
