@extends('layouts.structure-email')
@section('content')
<div class="email-container">
    <h1>HAY UNA NUEVA NOVEDAD ESPERANDO SER RESUELTA</h1>
    <small>Fecha: {{$date}}</small>
    <p>El ambiente de formación {{$classroom}} presenta una novedad técnica. </p>
    <h2>DESCRIPCIÓN</h2>
    <p>{!!$description!!}</p>
</div>
@endsection