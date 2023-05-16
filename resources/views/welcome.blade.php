<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            
        </style>

            @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Election</a>
            <ul class="navbar-nav mr-auto">
                <li ><a class="nav-link " href="motivation_create">Creation d'une motivation</a></li>
                <li ><a class="nav-link " href="motivation_liste">Liste de motivation</a></li> 
            </ul>  
        </nav>
    </body>
</html>
