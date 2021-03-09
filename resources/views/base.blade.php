<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
</head>
<body>
<header>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                        <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                        </div>
                        <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                </div>
        </nav>
</header>
        @yield('content')
        <p>nous sommes à votre disposition !</p>
        <p><a href="/">revenir à la page d'accueil</a></p>
        <footer>
                <p>c'est la partie pied de page !</p>
                @if(Route::is('contact'))
                <p>c'est la notre page contact !</p>
                @endif
        </footer>
</body>

</html>