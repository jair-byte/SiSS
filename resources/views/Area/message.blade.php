@extends('layout/template')

@section('title','Registro de areas')

@section('content')

<main>
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        <a href="{{url('area')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main>
