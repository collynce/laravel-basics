<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo App</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="{{asset('js/app.js')}}" defer></script>

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>
