<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class ClassroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $classrooms =  Classroom::all();
       return view("auth.classrooms")->with("classrooms", $classrooms);
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
        $rules = [
            'number_classroom'=>['required', 'unique:classrooms,number_classroom'],
        ];
        $message=[
            'number_classroom.required' => 'Debes seleccionar un ambiente',
            'number_classroom.unique' => 'El ambiente de formación que intenta ingresar ya existe',
        ];
        $validate = Validator::make(
            $request->all(),
            $rules,
            $message
        );
        if ($validate->fails()) {
           return back()->withErrors($validate->errors());
        }
        $classroom =  new Classroom();
        $classroom->number_classroom = implode($request->only('number_classroom'));
        $classroom->save();

        Alert::success('Ambiente Creado',"El ambiente $request->number_classroom fue creado exitosamente");
        return redirect()->route('admin.classroom');

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
