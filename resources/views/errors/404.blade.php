@extends('errors::layout')

@section('title', __('Not Found'))
@section('error_image')
    <img src={{ asset('./img/404.svg') }} alt="image error" />
@endsection
@section('error_title','Page not found')
@section('error_paragrap', 'Lo sentimos, la página que estas buscanso no pudo ser encontrada.')
