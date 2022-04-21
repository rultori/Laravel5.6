@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>{{ __('Contact') }}</h1>

    {{-- <ul>
        @if($errors->any())
            @foreach ( $errors->all() as $error )
                <li> {{ $error }} </li>
            @endforeach
        @endif
    </ul> --}}

    {{-- las reglas de validación las encontrramos en:  laravel.com/docs/validation --}}
    <form method="POST" action=" {{ route('messages.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre.." value="{{ old('name')}}" ><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="text" name="email" placeholder="Email.." value="{{ old('email') }}" ><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="text" name="subject" placeholder="Asunto.." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="Mensaje.." >{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>

    </form>
@endsection
