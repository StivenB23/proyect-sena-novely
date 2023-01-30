<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Novelty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class NoveltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $novelties = Novelty::join('classrooms','novelties.classroom_id','=','classrooms.id')
            ->get(['novelties.*','classrooms.number_classroom']);  
        return view('auth.novely')->with("novelties",$novelties);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::all();
        return view('auth.novely')->with("classrooms", $classrooms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha = now();

        $rules = [
            'file'=>'required',
            'ambiente'=>'required',
            'problema'=>'required|max:200'
        ];
        $message=[
            'ambiente.required' => 'Debes seleccionar un ambiente',
            'problema.max' => 'Para describir el problema cuentas con un tamaño maximo de 200 caracteres'
        ];
        $validate = Validator::make(
            $request->all(),
            $rules,
            $message
        );
        
        if ($validate->fails()) {
           return back()->withErrors($validate->errors());
        }

        $name = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/NoveltyImage',$name);

        $novelty =  new Novelty();
        $novelty->url_evidence = $name;
        $novelty->date_novelty = $fecha->toDateTimeString();
        $novelty->description = implode($request->only('problema'));
        $novelty->user_id = implode($request->only('user'));
        $novelty->state = "pendiente";
        $novelty->classroom_id= implode($request->only('ambiente'));
        $novelty->save();

        Alert::success('Novedad Creada Exitosamente','El equipo técnico se hara cargo lo más pronto posible.');
        return redirect()->route('novedad.'.Auth::user()->role);
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
    public function update(Request $request)
    {
      $fecha = now();
      Novelty::where('id', $request->id)
        ->update(["state" => "resuelto", "date_resolved" => $fecha->toDateTimeString()]);
      toast('Novedad resuelta','success');
      return redirect()->route('novedad.'.Auth::user()->role);
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
