@extends('layouts.estructure-base')
@section('title', "Llamados de atención |")
@section('content')
    @include('partials.sidebar')
    <main class="dashboard">
        <div class="dashboard__heading">
            
            @if ($listFicha)
                @foreach ($fichaStudents as $student)
                    <h2 class="heading__title">{{$student->number_ficha}}</h2>
                @endforeach
            @else
                <h2 class="heading__title">Documentos</h2>
            @endif
            <div class="tagname">
                <i class="fa-solid fa-user icon-tag"></i>  
                <h4>{{Auth::user()->name }}</h4>
            </div>
       </div>
        <section class="container__table"  >
            @if ($listFicha)
           
                {{-- <textarea class="ckeditor" name="" id="editor1" rows="10" cols="80"></textarea> --}}
                <table class="table" id="myTable">
                    <thead>
                        <th>T.D</th>
                        <th>N° doc</th>
                        <th>Nombre</th>
                        <th>email</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($fichaStudents as $student)
                            <tr>
                                <td>{{ $student->document_type }}</td>
                                <td>{{ $student->document_number }}</td>
                                <td>{{ $student->name.' '.$student->lastname  }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    <form action="/instructor/llamadosdeatencion" method="post">
                                        @csrf
                                        <input type="hidden" name="document" value="callOfAttention">
                                        @foreach ($fichaStudents as $student)
                                            <input type="hidden" name="number_ficha" value={{$student->number_ficha}} >
                                        @endforeach
                                        <input type="hidden" name="document_type" value="{{ $student->document_type }}">
                                        <input type="hidden" name="document_number" value="{{ $student->document_number }}" >
                                        <input type="hidden" name="fullname_instructor" value="{{ Auth::user()->name }} {{ Auth::user()->lastname }}">
                                        <input type="hidden" name="fullname_aprendiz" value="{{ $student->name}} {{$student->lastname  }}">
                                        @foreach ($program as $program)
                                            <input  type="hidden" name="name_program" value="{{$program->nombre}}" >
                                        @endforeach
                                        <button class="btn btn--download" type="submit">Plan de mejoramiento</button>
                                        <button class="btn btn--download" type="submit">Llamado de Atención</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else    
                <div class="container__fichas">
                    @foreach ($fichas as $ficha)    
                        <div class="card__ficha" >
                            <a href="/instructor/fichas/{{$ficha->id}}"><h4>Ficha: {{$ficha->number_ficha}}</h4></a> 
                            <p>{{$ficha->nombre}}</p>
                        </div>
                    @endforeach
                </div> 

            @endif
        </section>
    </main>
@endsection