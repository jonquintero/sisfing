@extends('layout')

@section('title', "Editar Dependencia")

@section('content')
    @card
        @slot('header', 'Editar dependencia')

        @include('shared._errors')

        <form method="POST" action="{{ url("dependencias/{$dependency->id}") }}">
            {{ method_field('PUT') }}

            @render('DependenciesField', compact('dependency'))

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Actualizar dependencia</button>
                <a href="{{ route('users.index') }}" class="btn btn-link">Regresar al listado de dependencias</a>
            </div>
        </form>
    @endcard
@endsection
