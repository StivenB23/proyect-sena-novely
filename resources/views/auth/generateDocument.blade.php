@extends('layouts.estructure-base')
@section('title', "Llamados de atención |")
@section('content')
    @include('partials.sidebar')
    <section style="margin-left: 90px">
       {{-- <form style="width: 500px" action="" method="post">
        @foreach ($student as $student)      
        <input type="text"  disabled value="{{$student->document_type}} {{$student->document_number}}" >
        <label for="">Nombre:</label>
        <input type="text" value="{{$student->name}}  {{$student->lastname}}" disabled >
        <label for="">Email</label>
        <input type="text" value={{ $student->email }} disabled >
        @endforeach
        <button>Generar Documento</button>
       </form> --}}
    </section>
@endsection