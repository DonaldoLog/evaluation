<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Question;
use \Log;

class FormController extends Controller
{
    public function index(){
        return view('modules.forms.index');
    }

    public function store(Request $request) {
        try {
            $exist = Form::where('name', $request->form['name'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe este cuestionario.']);
            }
            $form = new Form();
            $form->name = $request->form['name'];
            $form->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error. Intente de nuevo.']);
        }
    }

    public function getForms(Request $request) {
        $search = $request->search;
        $query = Form::select('id', 'name')
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

    public function getForm ($formId) {
        try {
            $form = Form::where('id', $formId)->first();
            if ($form) {
                return response()->json(['success' => true, 'form' => $form], 200);
            }
            return response()->json(['success' => false, 'message' => 'Questionario no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateForm (Request $request) {
        try {
            $exist = Form::where('name', $request->form['name'])
            ->where('id', '!=', $request->form['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta cuestionario.'], 200);
            }
            $form = Form::where('id', $request->form['id'])->first();
            if ($form) {
                $form->name = $request->form['name'];
                $form->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Questionario no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyForm (Request $request) {
        try {
            $form = Form::where('id', $request->form['id'])->first();
            if ($form) {
                $form->delete();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Cuestionario no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function adminForm ($formId) {
        try {
            $form = Form::where('id', $formId)->first();
            $questions = Question::where('formId', $formId)->get();
            if (!$form) {
                return redirect()->route('forms.index');
            }
            return view('modules.forms.admin')
            ->with('form', $form)
            ->with('questions', $questions);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function getQuestionsByForm (Request $request, $formId) {
        $search = $request->search;
        $query = Question::where('formId', $formId)
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

    public function storeQuestion (Request $request) {
        try {
            $exist = Question::where('name', $request->question['name'])->where('formId', $request->form['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta pregunta en el cuestionario.'], 200);
            }
            $question = new Question();
            $question->name = $request->question['name'];
            $question->formId = $request->form['id'];
            $question->type = 1;
            $question->save();

            return response()->json(['success' => true ], 200);
        } catch (\PDOException $th) {
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function getQuestion ($questionId) {
        try {
            $question = Question::where('id', $questionId)->first();
            if ($question) {
                return response()->json(['success' => true, 'question' => $question], 200);
            }
            return response()->json(['success' => false, 'message' => 'Pregunta no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function updateQuestion (Request $request) {
        try {
            $exist = Question::where('name', $request->question['name'])
            ->where('id', '!=', $request->question['id'])->where('formId', $request->form['id'])->first();
            if ($exist) {
                return response()->json(['success' => false, 'message' => 'Ya existe esta pregunta.'], 200);
            }
            $question = Question::where('id', $request->question['id'])->first();
            if ($question) {
                $question->name = $request->question['name'];
                $question->save();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Questionario no encontrado.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

    public function destroyQuestion (Request $request) {
        try {
            $question = Question::where('id', $request->question['id'])->first();
            if ($question) {
                $question->delete();
                return response()->json(['success' => true], 200);
            }
            return response()->json(['success' => false, 'message' => 'Pregunta no encontrada.'], 200);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th, 'message' => 'Ha ocurrido un error.'], 200);
        }
    }

}
