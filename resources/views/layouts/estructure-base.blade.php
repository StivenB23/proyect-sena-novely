<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Estiles --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <!-- Icons -->
     <script src="https://kit.fontawesome.com/c50bb20207.js" crossorigin="anonymous"></script>
    <!--AOS css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Fancyboc css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <!--Datatable CSS-->
    <link
    href="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.css"
    rel="stylesheet"
    type="text/css"
  />
</head>
<body>
    @include('sweetalert::alert')
    @yield('content')
    <!--AOS Js--->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('storage/ckeditor/ckeditor.js') }}" ></script>

    <!--Datatable Js-->
    <script
      src="https://cdn.jsdelivr.net/npm/vanilla-datatables@latest/dist/vanilla-dataTables.min.js"
      type="text/javascript"
    ></script>
     <!-- Fancybox js -->
     <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="{{ asset('js/main.js') }}" ></script>
</body>
</html>