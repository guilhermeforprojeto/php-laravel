<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- fontes dos Google  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- CSS da aplicação -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>

<body class=" antialiased">
    @yield('content')
    <footer>
        <p>HDC Events &copy; System Bee 2022</p>
    </footer>
</body>

</html>
