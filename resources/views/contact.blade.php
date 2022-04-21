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
                        <input class="form-control bg-light shadow-sm border-0"
                            id="name"                                        name="name"
                            placeholder="Nombre.."
                            value="{{ old('name') }}">
                            {!! $errors->first('name', '<small class="text-danger">:message</small><br>') !!}
                    </div>


                    <div class="form-group">
                        <label for="name">Email</label>
                        <input class="form-control bg-light shadow-sm border-0"
                            type="text"
                            name="email"
                            placeholder="Email.."
                            value="{{ old('email') }}" >
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                    </div>

                    <div class="form-group">
                        <label for="name">Asunto</label>
                        <input class="form-control bg-light shadow-sm border-0"
                            type="text"
                            name="subject"
                            placeholder="Asunto.."
                            value="{{ old('subject') }}"><br>
                            {!! $errors->first('subject', '<small class="text-danger">:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                        <label for="name">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm border-0"
                            name="content"
                            placeholder="Mensaje.." >
                            {{ old('content') }}</textarea><br>
                            {!! $errors->first('content', '<small class="text-danger">:message</small><br>') !!}
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>

            </form>
        </div>
    </div>
</div>


@endsection
