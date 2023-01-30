<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('login');
    }
    // public function login(Request $request)
    // {
    //     $validated = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:8'
    //     ]);
    //     if (Auth::attempt([$validated, 'rol_id' => 1])) {
    //         $request->session()->regenerate();
    //         // $user = auth()->user();
    //         // $user = User::all();
    //         echo "admin";
    //         // return redirect('dashboard');
    //     }
    // }
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, ['email' => 'required', 'password' => 'required']);
        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'administrador') {

                return redirect()->route('home.admin');
            }
            if (auth()->user()->role == 'aprendiz') {

                return redirect()->route('home.apren');
            }
            if (auth()->user()->role == 'instructor') {

                return redirect()->route('home.inst');
            }
            if (auth()->user()->role == 'tecnico') {

                return redirect()->route('home.tecnico');
            }
        }
        return redirect()->route('login')->with('status', 'El usuario o contraseña no es correcto');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/');
    }
}
