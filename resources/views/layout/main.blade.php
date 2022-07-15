<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="/img/logo-white.svg" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Scripts -->
        <script src="/js/scripts.js" defer></script>

    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.svg" alt="HDC Events Logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">Criar Evento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

    @yield('content')

    <footer>    
        <p>
            DHC Events &copy; 2022
        </p>

        <p>
            By <a href="https://github.com/weltonam" target="_blanket">WeltonMatosDev</a>
        </p>
        <p>
            In <a href="https://www.horadecodar.com.br/cursos-horadecodar/" target="_blanket">Hora De Cordar</a>
        </p>
    </footer>

    <!-- IonIcons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>