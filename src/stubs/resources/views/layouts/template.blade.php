<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Custom styles for this template -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>

    @include('layouts.navbar')

    <!-- Begin page content -->
    <main role="main" class="container">

        @yield('content')

    </main>

    @include('layouts.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

