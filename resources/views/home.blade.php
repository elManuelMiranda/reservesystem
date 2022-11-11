@extends('layouts.app')

@section('contenido')

    <h1>
        Hola {{ Auth::user()->name}}
    </h1>

    <a href="{{ url('users}}">Ir a usuarios</a>

    <form action="{{ url('logout') }}">
        @csrf

        <button type="submit">
            Salir
        </button>
    </form>

@endsection