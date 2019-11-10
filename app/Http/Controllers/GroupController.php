<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Illuminate\Support\Facades\Log;

class GroupController extends Controller
{
    public function index(){
        return view('modules.groups.index');
    }

    public function store(Request $request) {
        try {
            $exist = Group::where('name', $request->group['name'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta grupo.']);
            }
            $carrer = new Group();
            $carrer->name = $request->group['name'];
            $carrer->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getGroups(Request $request) {
        $search = $request->search;
        $query = Group::select('id', 'name')->with('career')
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

    public function getGroup ($groupId) {
        try {
            $group = Group::where('id', $groupId)->first();
            if ($group) {
                return response()->json(['success' => true, 'group' => $group], 200);
            }
            return response()->json(['success' => false, 'message' => 'Grupo no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateGroup (Request $request) {
        try {
            $exist = Group::where('name', $request->group['name'])
            ->where('id', '!=', $request->group['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta grupo.'], 200);
            }
            $group = Group::where('id', $request->group['id'])->first();
            if ($group) {
                $group->name = $request->group['name'];
                $group->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Grupo no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyGroup (Request $request) {
        try {
            $group = Group::where('id', $request->group['id'])->first();
            if ($group) {
                $group->delete();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Grupo no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }
}
