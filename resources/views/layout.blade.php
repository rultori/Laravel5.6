<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>

    </style>
</head>
<body>
    <div id="app"
         class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>

        <main class="py-4">
            @yield('content')
        </main>


        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>
