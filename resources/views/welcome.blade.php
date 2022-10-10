<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP e Laravel</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/script.js"></script>
    <img src="/img/banner.jpg" alt="Banner" />
</head>

<body class="antialiased">
    <a href="/">Home</a>
    <a href="/contact"> Contato</a>
    <a href="/about"> Sobre</a>
    <h1>Curso de PHP com Laravel</h1>
    @if($nome == "Guilherme")
    <p>Name is Guilherme</p>
    @else
    <p>Name is not Guilherme</p>
    @endif

    @for($i = 0; $i < count($arr); $i++) <p>{{ $arr[$i] }}</p>
        @endfor


        @php
        $name = "Joao";
        echo $name;
        @endphp
</body>

</html>