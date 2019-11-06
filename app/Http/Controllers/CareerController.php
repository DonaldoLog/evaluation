<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    public function index(){
        return view('modules.careers.index');
    }

    public function store(Request $request){

        return response()->json(['success' => 'true']);
    }
}
