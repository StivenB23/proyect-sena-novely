@extends('layouts.estructure-base')
@section('content-dashboard')   

    @yield('content')
    <h1>HELLO ADMIN {{ Auth::user()->name }} </h1>
    {{ Auth::user()->role }}
 
@endsection
