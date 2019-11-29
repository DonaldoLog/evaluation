<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
{
    return 'studentId';
}

public function login(Request $request)
{
    //Error messages
    $messages = [
        "studentId.required" => "Usuario es requerido.",
        "studentId.studentId" => "Usuario no valido.",
        "studentId.exists" => "No existe tu usuario.",
        "password.required" => "Contraseña es requerida.",
        "password.min" => "Contraseña mayor a 6 caracteres."
    ];

    // validate the form data
    $validator = Validator::make($request->all(), [
            'studentId' => 'required|exists:users,studentId',
            'password' => 'required|min:6'
        ], $messages);
    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    } else {
        // attempt to log
        if (Auth::attempt(['studentId' => $request->studentId, 'password' => $request->password ], $request->remember)) {
            // if successful -> redirect forward
            return redirect()->intended(route('user.overview'));
        }

        // if unsuccessful -> redirect back
        return redirect()->back()->withInput($request->only('studentId', 'remember'))->withErrors([
            'password' => 'Contraseña incorrecta.',
        ]);
    }
}
}
