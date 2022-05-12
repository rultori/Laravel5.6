@extends('layout')
@section('title', 'Crear proyecto')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-5 col-lg-6 mx-auto">


                @include('partials.validation-errors')
                {{-- @include('projects._form', [
                'btnText' => 'Actualizar',
                'action' => route('projects.update', $project),
                'method' => 'POST',
            ]) --}}

                <form class="bg-white py-3 px-4 shadow rounder"
                    method="POST"
                    enctype="multipart/form-data"
                    action="{{ route('projects.update', $project) }}">
                    @method('PATCH')
                    <h1 class="display-4">
                        Editar proyecto
                    </h1>
                    <hr>
                    @include('projects._form', ['btnText'=> 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection
