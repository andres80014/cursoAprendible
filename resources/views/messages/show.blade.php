@extends('layout')

@section('contenido')

    <table width="100%" border="1">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        </thead>
            <tr>
                <td>{{$message->nombre}}</td>
                <td>{{$message->email}}</td>
                <td>{{$message->message}}</td>
            </tr>
    </table>
@stop
