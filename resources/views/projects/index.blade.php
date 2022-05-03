@extends('layout')

@section('title', 'Portfolio')

@section('content')

{{-- <div class="card" style="width: 18rem;"> --}}
<div class="container">
    <div class="d-flex justify-content-between align-item-center mb-3">
        <h1 class="display-5 mb-0">{{ __('Projects') }}</h1>
        @auth
            <a class="btn btn-primary"
                href="{{ route('projects.create') }}"
            >Crear un proyecto
            </a>
        @endauth
    </div>

    <p class="lead text-secondary">Proyectos realizados Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

    <div class="d-flex flex-wrap justify-content-between align-items-start">
        @forelse ($projects as $project)
            <div class="card border-0 shadow-sm mt-4 mx-auto" style="width:10rem;">
                @if ($project->image)
                    <img class="card-img-top"
                    src="/storage/{{ $project->image }}"
                    alt="{{ $project->title }}"
                    >
                @endif
                <div class="card-boby">
                    <h5 class="card-title">
                        <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                    </h5>
                    <h6 class="card-subtitle">{{ $project->created_at->format('d/m/Y') }}</h6>
                    <p class="card-text text-truncate">{{ $project->description }}</p>
                    <a href="{{ route('projects.show', $project) }}"
                        class="btn btn-primary btn-sm"
                    >Ver mas...</a>
                </div>
            </div>
         @empty
            <div class="card">
                <div class="card-boby">
                   {{ __('There are no projects to show') }}
                </div>
            </div>
        @endforelse
    </div>
            <div class="mt-4">
              {{ $projects->links() }}
           </div>
</div>



@endsection

{{-- <div class="card" style="width: 18rem;">
        <img class="card-img-top" src=".../100px180/" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
</div> --}}
