@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    @if(session()->has('info'))
        <h3>{{session('info')}}</h3>
    @else
        <form method="POST" action="{{ route('messages.store') }}">
            {!! csrf_field() !!}
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
            {!!  $errors->first('nombre','<span class=error>:message</span>') !!}

            <label for="email">Nombre</label>
            <input type="email" name="email">
            {!!  $errors->first('email','<span class=error>:message</span>') !!}

            <label for="mansaje">Mensaje</label>
            <textarea name="mensaje"></textarea>
            {!!  $errors->first('mensaje','<span class=error>:message</span>') !!}

            <input type="submit" value="enviar">
        </form>
    @endif
@stop
