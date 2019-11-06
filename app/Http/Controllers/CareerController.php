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

    public function store(Request $request){
        try {
            $carrer = new Career();
            $carrer->name = $request->carrer['name'];
            $carrer->save();
            return response()->json(['success' => true]);
        } catch (\PDOException $th) {
            Log::error($th);
            return response()->json(['success' => false, 'error' => $th]);
        }
    }
}
