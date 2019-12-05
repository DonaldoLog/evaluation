<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Group;
use App\Models\Career;
use \Log;

class StudentController extends Controller
{
    public function index(){
        return view('modules.students.index');
    }

    public function password () {
        $users = User::where('studentId', '!=', 0000)->get();
        foreach ($users as $key => $user) {
            $user->password = bcrypt($user->studentId);
            $user->save();
        }
        return "done";
    }

    public function store(Request $request) {
        try {
            $exist = User::where('studentId', $request->student['studentId'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta matricula.']);
            }
            $student = new User();
            $student->name = $request->student['name'];
            $student->last_name = $request->student['last_name'];
            $student->studentId = $request->student['studentId'];
            $student->password = bcrypt($request->student['studentId']);
            $student->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getStudents(Request $request) {
        $search = $request->search;
        $query = User::select('id', 'name', 'studentId', 'last_name')
            ->where('admin', 0)
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

    public function getStudent ($studentId) {
        try {
            $student = User::where('id', $studentId)->first();
            if ($student) {
                return response()->json(['success' => true, 'student' => $student], 200);
            }
            return response()->json(['success' => false, 'message' => 'Estudiante no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateStudent (Request $request) {
        try {
            $exist = User::where('studentId', $request->student['studentId'])
            ->where('id', '!=', $request->student['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta matricula.'], 200);
            }
            $student = User::where('id', $request->student['id'])->first();
            if ($student) {
                $student->name = $request->student['name'];
                $student->last_name = $request->student['last_name'];
                $student->studentId = $request->student['studentId'];
                $student->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Estudiante no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyStudent (Request $request) {
        try {
            $student = User::where('id', $request->student['id'])->first();
            if ($student) {
                $student->delete();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Estudiante no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }
}
