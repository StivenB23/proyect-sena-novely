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
        <section class="section_dashboard" >
             <h2>WELCOME {{Auth::user()->name }} rol {{Auth::user()->role }}</h2>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores in excepturi ea cum enim facere sint repellat quibusdam, exercitationem non aliquid natus, dolorum ratione incidunt commodi optio, eos accusamus! Dolorum doloribus debitis alias quae. Amet praesentium suscipit nemo non facilis.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores in excepturi ea cum enim facere sint repellat quibusdam, exercitationem non aliquid natus, dolorum ratione incidunt commodi optio, eos accusamus! Dolorum doloribus debitis alias quae. Amet praesentium suscipit nemo non facilis.</p>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores in excepturi ea cum enim facere sint repellat quibusdam, exercitationem non aliquid natus, dolorum ratione incidunt commodi optio, eos accusamus! Dolorum doloribus debitis alias quae. Amet praesentium suscipit nemo non facilis.</p>
             <div>
             @if (Auth::user()->role == "aprendiz")  
               <div class="card__dashboard" >
                     <img class="object__image" src="{{ asset('img/image_novely.svg') }}" alt="" />
                    <h3>Registrar Novedad</h3>
               </div>
             @endif
             @if (Auth::user()->role == "instructor")
               <div>
                    <img class="object__image" src="{{ asset('img/image_novely.svg') }}" alt="" />

                    <h3>Registrar Novedad</h3>
               </div>
               <div>

                    <h3>Generar Reporte aprendiz</h3>
               </div>
                 
             @endif
             
             </div>
        </section>
     </main>
@endsection
