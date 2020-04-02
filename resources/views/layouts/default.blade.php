<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME', 'L56 V2 Boilerplate') }}</title>

    <!-- Fonts, CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    @stack('styles')
</head>

<body>
    @yield('content')
</body>

<footer>
    @stack('scripts')
</footer>

</html>