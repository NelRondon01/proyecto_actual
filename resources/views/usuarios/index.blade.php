@extends('layouts.plantilla')

@section('content')
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha de Creación</th>
            <th>Fecha de Actualización</th>
        </tr>
        @foreach ($usuarios as $u)
            <tr>
                <td class="number">{{$u->id}}</td>
                <td>{{$u->nombre}}</td>
                <td>{{$u->email}}</td>
                <td class="number">{{$u->created_at}}</td>
                <td class="number">{{$u->updated_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection