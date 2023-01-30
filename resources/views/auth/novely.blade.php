@extends('layouts.estructure-base')
@section('title', "Novely | {{ Auth::user()->name }}")
@section('content')    
    @include('partials.sidebar') 
    <main class="dashboard" >
        <div class="dashboard__heading">
             <h2 class="heading__title">Novedad</h2>
             <div class="tagname">
                 <i class="fa-solid fa-user icon-tag"></i>  
                 <h4>{{Auth::user()->name }}</h4>
             </div>
        </div>
        @if (Auth::user()->role == 'instructor' or Auth::user()->role == 'aprendiz')
        <section class="dashboard__content">
          @foreach ($errors as $error)
              <p>{{$error}}</p>
          @endforeach
              <form action="/{{Auth::user()->role}}/novedad" class="container__form" method="POST" enctype="multipart/form-data">
                <h2 class="form__title" >REGISTRAR NOVEDAD</h2>
            <div class="form__components">
                <div class="form__image">
                    <label>Evidencia (cargar imagen):</label>
                    <div class="form__file">
                      <label for="file-ip-1" class="label-upload"><i class="fa-solid fa-cloud-arrow-up"></i> Cargar Imagen</label>
                      <input type="file" name="file" class="file-input" id="file-ip-1" accept="image/*" capture="camera" />
                    </div>
                    <div class="container__preview">
                        <img id="file-ip-1-preview" />
                    </div>
                </div>
                <div class="form__inputs">
                      <input type="hidden" name="user" value={{Auth::user()->id}} > 
                      @csrf
                    <div class="form__select">
                        @error('ambiente')      
                          <small class="error">{{$message}}</small>
                        @enderror
                        <label>Ambiente:</label> <br>
                        <select name="ambiente" id="">
                          <option value="" disabled selected>Seleccionar</option>
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->number_classroom }}</option>
                        @endforeach
                        </select>
                      </div>
                      <br>
                      <div class="form__problem">
                        @error('problema')
                          <p>{{ $message }}</p>
                        @enderror
                        <label>Problema:</label><br>
                        <textarea rows="2" class="ckeditor" name="problema" id="editor1" placeholder="Describa de manera clara y corta la novedad"></textarea>
                      </div>
                      <button class="btn" type="submit" >Registrar</button>
                </div>
            </div>
          </form>
        </section>
        @endif
        @if (Auth::user()->role == 'tecnico')
        <section class="novely__list" >
          <table class="table" id="myTable">
            <thead>
              <tr>
                <th>Evidencia</th>
                <th>Fecha Novedad</th>
                <th>Fecha Resuelto</th>
                <th>Descripcion</th>
                <th>Ambiente</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($novelties as $novelty)
                  <tr>
                    <td> 
                      <div class="image-zoom" >
                        <div class="image-zoom-warpper">
                          <img class="image__novelty" src="{{ asset('storage/NoveltyImage/'.$novelty->url_evidence) }}" alt="" >
                          <a href="{{ asset('storage/NoveltyImage/'.$novelty->url_evidence) }}" data-fancybox="gallery">Ver</a>
                        </div>
                      </div>
                    </td>
                    <td>{{ $novelty->date_novelty }}</td>
                    <td> @if ($novelty->date_resolved)
                      {{  $novelty->date_resolved }}
                      @else
                          Todavía no se ha resuelto
                      @endif</td>
                    <td>{!! $novelty->description !!}</td>
                    <td>{{ $novelty->number_classroom }}</td>
                    <td>
                      @if ( $novelty->state == "pendiente" )

                          <p class="state__pending" >Pendiente</p>
                      @else
                          <p class="state__resolve" >Resuelto</p>
                      @endif
                    </td>
                    <td>
                      @if ( $novelty->state == "resuelto" )
                          <p>Bien</p>
                      @else        
                        <form action="{{ route('novedad.update') }}" method="POST">
                          @method('PUT')
                          @csrf
                          <input type="hidden" name="id" value={{ $novelty->id }}>
                          <button class="btn resolve" type="submit" >Resolver</button>
                        </form>
                      @endif                     
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
        </section>
        @endif
        <section>

        </section>
     </main>
@endsection
