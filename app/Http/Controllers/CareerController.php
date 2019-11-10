<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use Illuminate\Support\Facades\Log;

class CareerController extends Controller
{
    public function index(){
        return view('modules.careers.index');
    }

    public function store(Request $request) {
        try {
            $exist = Career::where('name', $request->career['name'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta carrera.']);
            }
            $carrer = new Career();
            $carrer->name = $request->career['name'];
            $carrer->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getCareers(Request $request) {
        $search = $request->search;
        $query = Career::select('id', 'name')
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

    public function getCareer ($careerId) {
        try {
            $career = Career::where('id', $careerId)->first();
            if ($career) {
                return response()->json(['success' => true, 'career' => $career], 200);
            }
            return response()->json(['success' => false, 'message' => 'Carrera no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateCareer (Request $request) {
        try {
            $exist = Career::where('name', $request->career['name'])
            ->where('id', '!=', $request->career['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta carrera.'], 200);
            }
            $career = Career::where('id', $request->career['id'])->first();
            if ($career) {
                $career->name = $request->career['name'];
                $career->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Carrera no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }
}
