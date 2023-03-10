@extends('layouts.estructure-base')
@section('content')   
<div class="sidebar">
    <h2 class="sidebar__logo">L</h2>
    <nav class="sidebar__links">
      <a class="sidebar__link" href=""
        ><i class="fa-solid fa-house icon-sidebar"></i
        ><span class="sidebar__link--text">Inicio</span></a
      >
      <a class="sidebar__link" href=""
        ><i class="fa-solid fa-circle-exclamation icon-sidebar"></i
        ><span class="sidebar__link--text">Novedades</span></a
      >
      <a class="sidebar__link" href="{{ route('admin.classroom') }}"
        ><i class="fa-solid fa-file-circle-exclamation icon-sidebar"></i
        ><span class="sidebar__link--text">Ambientes</span></a
      >
      <a class="sidebar__link" href=""
        ><i class="fa-solid fa-users icon-sidebar"></i
        ><span class="sidebar__link--text">Users</span></a
      >
      <a class="sidebar__link" href=""
        ><i class="fa-solid fa-gear icon-sidebar"></i
        ><span class="sidebar__link--text">Configuración</span></a
      >
      <a class="sidebar__link" id="btnLogout" ><i class="fa-solid fa-door-open icon-sidebar"></i
        ><span class="sidebar__link--text">Cerrar sesión</span>
        <form action="/logout" method="post" id="formLogout" >
          @csrf
        </form>
      </a>
    </nav>
  </div>
  <main class="dashboard" >

    @yield('content-dashboard')
  
  </main>
@endsection
