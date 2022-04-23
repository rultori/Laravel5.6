@extends('layout')

@section('title', 'Contact')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow rounded py-3 px-4"
                method="POST"
                action=" {{ route('messages.store') }}"
            >
                    @csrf
                    <h1 class="display-5">{{ __('Contact') }}</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm  {{ $errors->has('name') ? ' is-invalid' : '' }}"
                            id="name"
                            name="name"
                            placeholder="Escribe tu nombre.."
                            value="{{ old('name') }}"
                            autofocus
                        >
                            @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            {{-- {!! $errors->first('name', '<small class="text-danger">:message</small><br>') !!} --}}
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input class="form-control bg-light shadow-sm {{ $errors->has('email') ? ' is-invalid' : '' }} "
                            type="text"
                            name="email"
                            placeholder="Escribe tu email.."
                            value="{{ old('email') }}"
                        >
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            {{-- {!! $errors->first('email', '<small class="text-danger">:message</small>') !!} --}}
                    </div>

                    <div class="form-group">
                        <label for="name">Asunto</label>
                        <input class="form-control bg-light shadow-sm {{ $errors->has('subject') ? ' is-invalid' : '' }}"
                            type="text"
                            name="subject"
                            placeholder="Escibe un asunto.."
                            value="{{ old('subject') }}"
                        >
                            @if ($errors->has('subject'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                            @endif

                            {{-- {!! $errors->first('subject', '<small class="text-danger">:message</small><br>') !!} --}}
                    </div>

                    <div class="form-group">
                        <label for="name">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm {{ $errors->has('content') ? ' is-invalid' : '' }}"
                            name="content"
                            placeholder="Escribe un mensaje.." >
                            {{ old('content') }}
                        </textarea>
                            @if ($errors->has('content'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                            @endif

                            {{-- {!! $errors->first('content', '<small class="text-danger">:message</small><br>') !!} --}}
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
                    <a class="btn qbtn-lg btn-outline-primary btn-block"
                        href="{{ route('projects.index') }}">
                        Cancelar
                    </a>

            </form>
        </div>
    </div>
</div>


@endsection
