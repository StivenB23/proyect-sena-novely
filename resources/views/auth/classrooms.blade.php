@extends('layouts.structure-dashboard')
@section('title', "Llamados de atención |")
@section('content-dashboard')
    <section class="dashboard">
        <div class="dashboard__heading">
                <h2 class="heading__title">AMBIENTES</h2>
            <div class="tagname">
                <i class="fa-solid fa-user icon-tag"></i>  
                <h4>{{Auth::user()->name }}</h4>
            </div>
       </div>
        <article class="container__classrooms"  >
                {{-- <textarea class="ckeditor" name="" id="editor1" rows="10" cols="80"></textarea> --}}
               
                    <div class="container__table--classroom">
                        <table class="table" id="myTable">
                            <thead>
                                <th>Identificador</th>
                                <th>Número ambientes de formación</th>
                            </thead>
                            <tbody>
                                @foreach ($classrooms as $classroom)
                                    <tr>
                                        <td>{{ $classroom->id }}</td>
                                        <td>{{ $classroom->number_classroom }}</td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   <form action="/classrooms" method="POST" class="form_classroom" >
                    <h1>REGISTRAR AMBIENTE</h1>
                    @csrf
                    <label for="number_classroom">Ingrese número de ambiente</label>
                    <input type="number" name="number_classroom">
                    @error('number_classroom')
                    <small class="error_input">{{$message}}</small>
                    @enderror
                    <button type="submit" class="btn"  >Guardar</button>
                </form>
        </article>
    </section>
@endsection