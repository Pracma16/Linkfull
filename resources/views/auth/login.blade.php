@extends('layouts.app')

@section('titulo')
    Inicia sesion usuario
@endsection

@section('contenido')
<div class="container-contacto">
    <form class="form-contacto" novalidate method="POST" action="{{route('login')}}">
        <h1>Inicia sesion usuario</h1>
        @csrf
            <p>
                {{session('mensaje')}}
            </p>
        @if(session('mensaje'))

        @endif
        <div>
            <label for="email">Email</label>
            <input id="email"
                name="email"
                type="email"
                placeholder="Tu Correo">
                @error('email')
                <p>{{$message}}</p>
                @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password"
                name="password"
                type="password"
                placeholder="Password de Registro">
                @error('password')
                <p>{{$message}}</p>
                @enderror
        </div>
        <input type="submit"
        value="Ingresar">

        <a class="noCuenta " href="{{route('register')}}">¿No tienes cuenta? Crear cuenta</a>
        <a class="noCuenta " href="{{route('login-prestador')}}">Si eres prestador inicia sesión aqui</a>


    </form>
</div>


@endsection