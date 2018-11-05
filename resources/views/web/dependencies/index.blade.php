@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('dependencies.create') }}" class="btn btn-primary">Nueva Dependencia</a>
        </p>
    </div>

    @if ($dependencies->isNotEmpty())
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dependencies as $dependency)
                <tr>
                    <th scope="row">{{ $dependency->id }}</th>
                    <td>{{ $dependency->name }}</td>

                    <td>
                        <form action="{{ route('dependencies.destroy', $dependency) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('dependencies.show', $dependency) }}" class="btn btn-link"><span class="oi oi-eye"></span></a>
                            <a href="{{ route('dependencies.edit', $dependency) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                            <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <p>No hay dependencias registradas.</p>
    @endif
@endsection
