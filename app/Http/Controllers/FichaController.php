<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listFicha = false;
        $fichas = Ficha::join('programs','programs.id','=','fichas.program_id')
        ->get(['programs.nombre','fichas.id','fichas.number_ficha']);
        // $students = User::where('role','aprendiz')->get();
        return view("auth.listFicha")->with("fichas", $fichas)->with("listFicha",$listFicha);
    }

    public function showFicha($id)
    {
        $listFicha = true;
        $fichaStudents = Ficha::join('user_ficha','user_ficha.ficha_id','=','fichas.id')
        ->join('users','users.id','=','user_ficha.user_id')
        ->where('fichas.id','=',$id)
        ->get(['users.*','fichas.number_ficha']);
        $program = Ficha::join('programs','programs.id','=','fichas.program_id')
        ->where('fichas.id','=',$id)
        ->get(['programs.nombre']);
        return view("auth.listFicha")
            ->with("fichaStudents",$fichaStudents)
            ->with("program",$program)
            ->with("listFicha",$listFicha);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
