@extends('layouts.estructure-base')
@section('title','Settings')
@section('content')
    @include('partials.sidebar') 
    <main class="dashboard">
        <div class="dashboard__heading">
            <h2 class="heading__title">Configuración</h2>
       </div>
        <form class="form form--settings" action="" method="post">
            @csrf
            @foreach ($dataUser as $user)
                <input type="hidden" name="" value="{{$user->id}}" >      
                <div class="name">
                <h4>Nombres:</h4>
                <p>{{$user->name}}</p>
                </div>
                <div class="lastname">
                <h4>Apellidos</h4>
                <p>{{$user->lastname}}</p>
                </div>
                <div class="documentIdentification">
                <h4>Documento:</h4>
                <p>{{$user->document_type}} {{$user->document_number}}</p>
                </div>
                <div class="role">
                <h4>Rol:</h4>
                <p>{{$user->role}}</p>
                </div>
                <div class="input">
                    <label for="numberPhone">Number Phone</label>
                    <input type="number" name="numberPhone" value={{$user->phone_number}} >
                </div>
                <div class="input">
                <label for="emailUser">Email</label>
                    <input type="email" name="emailUser" value={{$user->email}}>
                </div>
                <button class="btn" type="submit">Guardar Cambios</button>
                <button class="btn" type="submit">Cambiar Contraseña</button>    
            @endforeach
          </form>
    </main>
@endsection