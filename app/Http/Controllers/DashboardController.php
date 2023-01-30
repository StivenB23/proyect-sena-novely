<?php
namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function aprendizDashboard()
    {
        $this->middleware('auth');
        return view('auth.dashboard')->with("msg","I am Aprendiz Role");
    }
    public function administradorDashboard()
    {
        $this->middleware('auth');
        return view('auth.dashboard-admin')->with("msg","I am Administrador Role");
    }
    public function instructorDashboard()
    {
        $this->middleware('auth');
        return view('auth.dashboard')->with("msg","I am Instructor Role");
    }
    public function tecnicoDashboard()
    {
        $this->middleware('auth');
        return view('auth.dashboard')->with("msg","I am Instructor Role");
    }
    public function config()
    {
        $id = strval(Auth::user()->id);
        $dataUser = User::where('id', $id)->get();
        return view('auth.settings')->with("dataUser",$dataUser);
    }
}
