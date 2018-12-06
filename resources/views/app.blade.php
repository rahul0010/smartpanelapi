<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    </head>
    <body>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>
            <div class="navigation__background">&nbsp;</div>
            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link"> Students</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"> Faculties</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link"> Attendence</a></li>
                </ul>
            </nav>
        </div>
        <main class="container">
                @yield('content')
        </main>
    <script src="{{ url('js/app.js') }}"></script>
    <script>
    </script>
    </body>
</html>
