@extends('layouts.app')

@section('content')

<div class="row align-items-center">
    <div class="col-8">
        <div class="display-4 ml-4 mt-4">Crear Usuario</div>
    </div>
    <div class="col-4">
        <a class="btn btn-outline-primary float-right mr-4" href="{{ route('usuarios.index') }}">Listar Usuarios</a>
    </div>
</div>

<hr>

<form method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

        <div class="col-md-6">
            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" autocomplete="name" autofocus>

            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="apellidos" class="col-md-4 col-form-label text-md-right">Apellidos</label>

        <div class="col-md-6">
            <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" autocomplete="name" autofocus>

            @error('apellidos')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="curp" class="col-md-4 col-form-label text-md-right">CURP</label>

        <div class="col-md-6">
            <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" autocomplete="name" autofocus>

            @error('curp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">email</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="domicilio" class="col-md-4 col-form-label text-md-right">Domicilio</label>

        <div class="col-md-6">
            <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" autocomplete="name" autofocus>

            @error('domicilio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="telefono" class="col-md-4 col-form-label text-md-right">Telefono</label>

        <div class="col-md-6">
            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" autocomplete="name" autofocus>

            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>

        <div class="col-md-6">
            <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}"  autocomplete="name" autofocus>

            @error('foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="social" class="col-md-4 col-form-label text-md-right">Social</label>

        <div class="col-md-6">
            <input id="social" type="text" class="form-control @error('social') is-invalid @enderror" name="social" value="{{ old('social') }}" autocomplete="name" autofocus>

            @error('social')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary btn-block mb-4">Guardar usuario</button>
        </div>
    </div>
</form>
@endsection