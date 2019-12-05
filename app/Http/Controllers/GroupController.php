<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Completed;
use App\Models\CompletedQuestion;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Models\Group;
use App\User;
use App\Models\Teacher;
use App\Models\Poll;
use Illuminate\Support\Facades\Log;
use DB;
class GroupController extends Controller
{
    public function index(){
        $careers = Career::all();
        return view('modules.groups.index')
        ->with('careers', $careers);
    }

    public function store(Request $request) {
        try {
            $exist = Group::where('name', $request->group['name'])->where('careerId', $request->career['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta grupo.']);
            }
            $group = new Group();
            $group->name = $request->group['name'];
            $group->careerId = $request->career['id'];
            $group->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getGroups(Request $request) {
        $search = $request->search;
        $query = Group::select('id', 'name', 'careerId')->with('career:id,name')
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
            $group = Group::where('id', $groupId)->with('career')->first();
            if ($group) {
                return response()->json(['success' => true, 'group' => $group], 200);
            }
            return response()->json(['success' => false, 'message' => 'Grupo no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function adminGroup ($groupId) {
        try {
            $group = Group::where('id', $groupId)->first();
            $teachers = Teacher::all();
            $students = User::all();
            if (!$group) {
                return redirect()->route('groups.index');
            }
            return view('modules.groups.admin')
            ->with('group', $group)
            ->with('teachers', $teachers)
            ->with('students', $students);
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
                $group->careerId = $request->career['id'];
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

    public function getTeachersByGroup (Request $request, $groupId) {
        $search = $request->search;
        $query = DB::table('groups_teachers')->where(['groupId' => $groupId])->select('groups_teachers.*','groups_teachers.id as groupTeacherId', 'teachers.*')
        ->leftjoin('teachers','teachers.id', 'groups_teachers.teacherId')
            ->when($search, function ($query, $search) {
                return $query->where('teachers.name', 'LIKE', '%' . $search . '%');
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

    public function getStudentsByGroup (Request $request, $groupId) {
        $search = $request->search;
        $query = User::whereHas('groups', function($q) use ($groupId){
                $q->where('groupId', $groupId);
            })
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

    public function storeTeacher (Request $request) {
        DB::beginTransaction();
        try {
            $group = Group::where('id', $request->group['id'])->first();
            $exist = $group->teachers()->where(['teacherId' => $request->teacher['id'], 'subject' => $request->subject])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe este profesor y materia en el grupo.'], 200);
            }
            $eval = Evaluation::where('active', 1)->first();
            $groupTeacherId = DB::table('groups_teachers')->insertGetId(
                ['subject' => $request->subject, 'tutoria' => $request->tutoria, 'groupId' => $group->id, 'teacherId' => $request->teacher['id']]
            );
            if ($eval) {
                $poll = new Poll();
                $poll->groupTeacherId = $groupTeacherId;
                $poll->evaluationId = $eval->id;
                $poll->save();
            }
            DB::commit();
            return response()->json(['success' => true ], 200);
        } catch (\PDOException $th) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function storeStudent (Request $request) {
        try {
            $group = Group::where('id', $request->group['id'])->first();
            $exist = $group->students()->where('groups_students.studentId', $request->student['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe este estudiante en el grupo.'], 200);
            }
            $group->students()->attach($request->student['id']);
            $group->save();

            return response()->json(['success' => true ], 200);
        } catch (\PDOException $th) {
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyStudentGroup(Request $request) {
        DB::beginTransaction();
        try {
            $group = Group::where('id', $request->group['id'])->first();
            $exist = $group->students()->where('groups_students.studentId', $request->student['id'])->first();
            if (!$exist) {
                return response()->json(['success' => false, 'message' => 'No existe este estudiante en el grupo.'], 200);
            }

            $eval = Evaluation::where('active', 1)->first();
            if ($eval) {
                $teachers = $group->teachers->pluck('id');
                $groupTeacher = DB::table('groups_teachers')->whereIn('teacherId', $teachers)->where('groupId', $group->id)->get()->pluck('id');
                $polls = Poll::whereIn('groupTeacherId', $groupTeacher)->get()->pluck('id');
                $completed = Completed::where('studentId', $request->student['id'])->whereIn('pollId', $polls)->delete();
                $completedQuestions = CompletedQuestion::where('studentId', $request->student['id'])->whereIn('pollId', $polls)->delete();
            }
            $group->students()->detach($request->student['id']);
            $group->save();
            DB::commit();
            return response()->json(['success' => true ], 200);
        } catch (\PDOException $th) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyTeacherGroup(Request $request) {
        DB::beginTransaction();
        try {
            $group = Group::where('id', $request->group['id'])->first();

            $exist = $group->teachers()->where(['groups_teachers.teacherId' => $request->teacher['id'], 'subject' => $request->teacher['subject'], 'id' =>  $request->teacher['groupTeacherId']])->first();
            if (!$exist) {
                DB::rollback();
                return response()->json(['success' => false, 'message' => 'No existe este profesor con materia en el grupo.'], 200);
            }

            $eval = Evaluation::where('active', 1)->first();
            if ($eval) {
                $groupTeacher = DB::table('groups_teachers')->where(['groupId' => $group->id, 'teacherId' => $request->teacher['id'],'subject' => $request->teacher['subject'], 'id' =>  $request->teacher['groupTeacherId']])->first();
                $poll = Poll::where(['groupTeacherId' => $groupTeacher->id, 'evaluationId' => $eval->id])->first();
                $completed = Completed::where('pollId', $poll->id)->delete();
                $poll->delete();
                $completedQuestions = CompletedQuestion::where('pollId', $poll->id)->delete();
            }
            $groupTeacher = DB::table('groups_teachers')->where(['groupId' => $group->id, 'teacherId' => $request->teacher['id'],'subject' => $request->teacher['subject'], 'id' =>  $request->teacher['groupTeacherId']])->delete();
            DB::commit();
            return response()->json(['success' => true ], 200);
        } catch (\PDOException $th) {
            DB::rollback();
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }
}
