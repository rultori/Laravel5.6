@extends('layout')

@section('title', 'Portfolio | ' . $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <a href="{{ route('projects.edit', $project) }}">Editar</a>


    {{-- <a href="{{ route('projects.delete', $project) }}">Eliminar</a> --}}
    <form method="POST" action="{{ route('projects.destroy', $project) }}">
        @csrf @method('DELETE')
        <button>ELiminar</button>



    </form>

    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>
@endsection
