{{-- PLANTILLAS --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'default')</title>
    @stack('css')
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    @yield('header')

    {{-- CONTENIDO VARIABLE --}}
    @yield('content')

    <footer></footer>
</body>

</html>
