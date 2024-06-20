@extends('layout')
@section('title', "Usuario{id}")
@section('content')

    <h1>usuario #{{$id}}</h1>
    Mostrando detalle del usuario: {{$id}}
@endsection