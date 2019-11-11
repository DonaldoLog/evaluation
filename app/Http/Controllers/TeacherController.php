<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Group;
use App\Models\Career;
use \Log;

class TeacherController extends Controller
{
    public function index(){
        return view('modules.teachers.index');
    }

    public function store(Request $request) {
        try {
            $exist = Teacher::where('email', $request->teacher['email'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe este correo.']);
            }
            $teacher = new Teacher();
            $teacher->name = $request->teacher['name'];
            $teacher->last_name = $request->teacher['last_name'];
            $teacher->email = $request->teacher['email'];
            $teacher->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getTeachers(Request $request) {
        $search = $request->search;
        $query = Teacher::select('id', 'name', 'last_name', 'email')
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

    public function getTeacher ($teacherId) {
        try {
            $teacher = Teacher::where('id', $teacherId)->first();
            if ($teacher) {
                return response()->json(['success' => true, 'teacher' => $teacher], 200);
            }
            return response()->json(['success' => false, 'message' => 'Profesor no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateTeacher (Request $request) {
        try {
            $exist = Teacher::where('email', $request->teacher['email'])
            ->where('id', '!=', $request->teacher['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta correo.'], 200);
            }
            $teacher = Teacher::where('id', $request->teacher['id'])->first();
            if ($teacher) {
                $teacher->name = $request->teacher['name'];
                $teacher->last_name = $request->teacher['last_name'];
                $teacher->email = $request->teacher['email'];
                $teacher->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Profesor no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyTeacher (Request $request) {
        try {
            $teacher = Teacher::where('id', $request->teacher['id'])->first();
            if ($teacher) {
                $teacher->delete();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Profesor no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }
}
