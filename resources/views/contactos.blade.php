@extends('layout')

@section('contenido')
<h1>Contactos</h1>

    <form method="POST" action="contacto">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        {{ $errors->first('nombre') }}

        <label for="email">Nombre</label>
        <input type="email" name="email">
        {{ $errors->first('email') }}

        <label for="mansaje">Mensaje</label>
        <textarea name="mensaje"></textarea>
        {{ $errors->first('mensaje') }}

        <input type="submit" value="enviar">
    </form>
@stop
