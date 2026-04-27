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
    <nav></nav>
    <header>@yield('header')</header>
    <main>@yield('main')</main>
    <footer>@yield('footer')</footer>
    @stack('scripts')
</body>
</html>