@extends('layouts.app')

@section('content')
<h1>Carrera index</h1>

<table class="table ">
    <thead>
        <tr class="text-center">
            <th>id</th>
            <th>nombre</th>
            <th>creditos</th>
            <th>duracion</th>
            <th>desc</th>
            <th>temario</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materias as $materia)
        <tr class="text-center">
            <th>{{ $materia->id }}</th>
            <td>{{ $materia->nombre }}</td>
            <td>{{ $materia->creditos }}</td>
            <td>{{ $materia->duracion }}</td>
            <td>{{ $materia->descripcion }}</td>
            <td>{{ $materia->plan_educativo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $materias->links() }}
@endsection
