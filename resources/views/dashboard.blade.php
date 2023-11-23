@extends('layouts.app')

@section('titulo')
    Hola mundo desde Dashboard
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="flex">
            <img class="md:w-6/12" src="{{ asset('img/usuario.png') }}" alt="Imagen de Usuario">
        </div>
        <div class="flex">
            <p>Juanxd</p>
        </div>
    </div>
@endsection
