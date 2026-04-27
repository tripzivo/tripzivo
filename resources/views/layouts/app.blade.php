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
    <header></header>
    <nav></nav>
    <main>@yield('main')</main>
    <footer>@yield('footer')</footer>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 80) {
                    $('nav').css({
                        'position': 'sticky',
                        'top': '0',        // Required for sticky to lock in place
                        'z-index': '1000'  // Ensures it stays above other content
                    });
                } else {
                    $('nav').css({
                        'position': 'relative',
                        'top': 'auto'
                    });
                }
            });
        });
    </script> 
    @stack('scripts')
</body>
</html>