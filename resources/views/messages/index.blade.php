@extends('layout')

@section('contenido')
    <h2>Todos los mensajes</h2>
    <table width="100%" border="1">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        </thead>
        @foreach($messages as $message)
            <tr>
                <td>{{$message->nombre}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
            </tr>

        @endforeach

    </table>
@stop
