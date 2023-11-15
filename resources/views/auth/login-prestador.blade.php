@extends('layouts.app')

@section('titulo')
    Inicia Sesion en Link Prestador
@endsection

@section('contenido')
<div class="container-contacto">
    <form class="form-contacto" novalidate method="POST" action="{{route('login-prestador')}}">
        <h1>Inicia sesion prestador</h1>
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
       
        <a class="noCuenta" href="{{route('register-prestador')}}">No tienes cuenta prestador? Crear cuenta</a>
     
       

    </form>
</div>


@endsection