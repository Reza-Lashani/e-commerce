<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>e-commerce</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="/CSS/phone-verification.css" rel="stylesheet">
    </head>
    <body class="antialiased">

        @if(session('error'))
            <div class="notification" id="closeNotification">
                <div class="alert alert-error">
                    {{ session('error') }}
                    <a href="#closeNotification" class="close-btn"">Close</a>
                </div>
            </div>
        @endif

        @yield('content')

        <footer>
            <a href="#"><span class="fab fa-instagram black-icon"></span></a>
            <a href="#"><span class="fab fa-twitter black-icon"></span></a>
            <a href="#"><span class="fab fa-telegram black-icon"></span></a>
        </footer>
    </body>
    </html>