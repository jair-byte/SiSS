@extends('layout/template')

@section('title','Registro de proveedores')

@section('content')

<main>
    <div class="container py-4">
        <h2>{{$msg}}</h2>
        <a href="{{url('coordinador')}}" class="btn btn-secondary">Regresar</a>
    </div>
</main>
