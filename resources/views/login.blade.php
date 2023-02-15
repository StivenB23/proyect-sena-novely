@extends('layouts.estructure-base')
@section('title', 'Login')
@section('content')
<main class="login">
  <div class="container__login">
    <div class="login__image">

    </div>
    <form action="/login" method="post" class="login__form">
        @csrf
      <a href="/"><i class="fa-sharp fa-solid fa-house"></i></a>
      <h1>WELCOME</h1>
      <div class="login__inputs">
        @if(session('status'))
          <p class="error">{{session('status')}}</p>
        @endif
        <label for="">Username</label>
        @error('email')      
            <small class="error_input">{{$message}}</small>
        @enderror
        <input type="email" name="email" id="" value="{{ old('email') }}" >
        <label for="password">Contraseña <i class="fa-sharp fa-solid fa-eye" id="icon-eye" ></i></label>
          @error('password')
            <small class="error_input">{{$message}}</small>
          @enderror
        <input type="password" name="password" id="inputPassword">
        <button class="btn" type="submit">Ingresar</button>
      </div>
    </form>
  </div>
</main>
@endsection