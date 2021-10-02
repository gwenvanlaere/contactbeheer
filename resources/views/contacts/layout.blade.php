<!DOCTYPE html>
<html lang="en">
    <head>
        <script src=" {{ asset('js/contactbeheer.js') }}" defer></script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href=" {{ asset('css/contactbeheer.css') }}" />
        <title>Contactbeheer - @yield('title')</title>
    </head>
    <body>
        <h1 class="text-center">CONTACTBEHEER</h1>
        <br>
        <main class="container">
            @yield('content')
        </main>
    </body>
</html>
