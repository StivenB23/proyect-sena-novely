@extends('layouts.estructure-base')
@section('title', 'Home | ')
@section('content')    
    @include('partials.sidebar') 
    <main class="dashboard" >
        <div class="dashboard__heading">
             <h2 class="heading__title">Inicio</h2>
             <div class="tagname">
                 <i class="fa-solid fa-user icon-tag"></i>  
                 <h4>{{Auth::user()->name }}</h4>
             </div>
        </div>
        <section>
             <h2>WELCOME {{Auth::user()->name }} rol {{Auth::user()->role }}</h2>
        </section>
     </main>
@endsection
