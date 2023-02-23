

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/js/app.js')

    <title>Laravel</title>

</head>

<body>
    <header>
        @include('partials.header')
    </header>
    <jumbotron>
        @include('partials.jumbotron')
    </jumbotron>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>