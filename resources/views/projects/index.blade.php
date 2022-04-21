@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <h1>{{ __('Projects') }}</h1>
    @auth
        <a href="{{ route('projects.create')}}">Crear un proyecto</a>
    @endauth

    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}"> {{ $project->title }} </a></li>
         @empty
            <li>{{ __('There are no projects to show') }}</li>
        @endforelse
        {{ $projects->links() }}
    </ul>
@endsection
