<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mx-auto my-8">
    @if( session('success') )
        <p class="mb-4 px-4 py-2 bg-green-200 border border-solid border-green-300 rounded">
            {{ session('success') }}
        </p>
    @endif
    @yield( 'content' )
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
