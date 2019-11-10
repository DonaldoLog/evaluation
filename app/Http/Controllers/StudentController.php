<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Group;
use App\Models\Career;
use \Log;

class StudentController extends Controller
{
    public function index(){
        $students = Group::all();
        return view('modules.students.index')
        ->with('groups', $students);
    }

    public function store(Request $request) {
        try {
            $exist = Student::where('studentId', $request->student['studentId'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta matricula.']);
            }
            $student = new Student();
            $student->name = $request->student['name'];
            $student->last_name = $request->student['last_name'];
            $student->studentId = $request->student['studentId'];
            $student->groupId = $request->student['group']['id'];
            $student->password = bcrypt('evaluacion2020');
            $student->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getStudents(Request $request) {
        $search = $request->search;
        $query = Student::select('id', 'name', 'groupId', 'studentId', 'last_name')->with('group:id,name')
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
            $student = Student::where('id', $studentId)->with('group')->first();
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
            $exist = Student::where('studentId', $request->student['studentId'])
            ->where('id', '!=', $request->student['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta matricula.'], 200);
            }
            $student = Student::where('id', $request->student['id'])->first();
            if ($student) {
                $student->name = $request->student['name'];
                $student->last_name = $request->student['last_name'];
                $student->studentId = $request->student['studentId'];
                $student->groupId = $request->student['group']['id'];
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
            $student = Student::where('id', $request->student['id'])->first();
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
