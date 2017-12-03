<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GanasGamers - MANAGEMENT</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/buefy/lib/buefy.min.css">
    @yield('styles')
</head>
<body>
        @include('_partials.navbar.main')
        @include('_partials.navbar.manage')
        <div class="management-area" id="app">
          @yield('content')
        </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/buefy"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
