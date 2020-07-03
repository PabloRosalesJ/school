@extends('layouts.app')

@section('content')

<div class="row align-items-center">
    <div class="col-8">
        <div class="display-4 ml-4 mt-4">Usuarios</div>
    </div>
    <div class="col-4">
        <a class="btn btn-outline-primary float-right mr-4" href="{{ route('usuarios.create') }}">Crear nuevo usuario</a>
    </div>
</div>

<hr>
    
<table class="table table-borderless table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col"></th>
        <th scope="col">Nombre</th>
        <th scope="col">email</th>
        <th scope="col">rol</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <th scope="row"> <a class="btn btn-secondary btn-sm" href="{{ route('usuarios.show', $user->id) }}">{{$user->id}}</a> </th>    
            <td>{{$user->foto }}</td>
            <td>{{$user->nombre}} {{$user->apellidos}}</td>
            <td>{{$user->email}}</td>
            <td></td>
            <td>{{$user->rol}}</td>
        </tr>
    @endforeach
</tbody>
</table>

<div class="row justify-content-center">
    {{ $users->links() }}
</div>
@endsection