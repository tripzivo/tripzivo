<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Tripzivo')</title>

    <link rel="stylesheet" href="css/global.css">
</head>
<body>
    <nav>
        <div class="row">
            <div class="col-1 left"><img src="assets/logo.png" alt="" id="logo"></div>
            <div class="col-2 center">
                <ul id="menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">Destination</a></li>
                    <li><a href="">Package</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="col-1 right"><p>✈️</p></div>
        </div>
    </nav>
    <header>@yield('header')</header>
    <main>@yield('main')</main>
    <footer>@yield('footer')</footer>
    @stack('scripts')
</body>
</html>