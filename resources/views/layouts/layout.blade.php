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
        <link href="/CSS/style.css" rel="stylesheet">

    </head>
    <body class="antialiased">

        @if(session('success'))
            <div class="notification" id="closeNotification">
                <div class="alert alert-success">
                    {{ session('success') }}
                    <a href="#closeNotification" class="close-btn">Close</a>
                </div>
            </div>
        @endif

        <header>
            <div class="header-top">
                <div class="logo">
                    <a href="{{ route('welcome') }}">
                        <img class="logo-icon" src="{{ asset('img/logo.png') }}" alt="E-Commerce Logo">
                    </a>
                </div>
                <form action="{{ route('product.search') }}" class="search-bar" method="Get">
                    <input type="text" name="query" placeholder="Search in E-Commerce">
                    <button type="submit">
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </button>
                </form>
                <div class="cart-icon">
                    <a 
                    @if(auth()->check())
                        href="{{ route('cart.index', ["user_id" => auth()->user()->id]) }}"
                    @else
                        href="{{ route('login') }}"
                    @endif>
                        <div class="material-symbols-outlined">
                            shopping_cart
                            @if (isset($activeOrdersNum) && $activeOrdersNum>0)
                                <div class="badge">
                                    {{ $activeOrdersNum }}
                                </div>
                            @endif
                        </div>
                    </a>
                </div>
                @guest
                    <div class="welcome log-reg">
                        <a href="{{ route('login') }}" class="btn btn-login">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-sign-up">Sign-up</a>
                    </div>
                @endguest
                @auth
                    <div class="user-profile log-reg">
                        <a href="{{ route('user.profile') }}" class="avatar" aria-label="User profile">
                            <span class="fa fa-user"></span>
                        </a>
                        <div class="user-profile-dropdown">
                            <a href="{{ route('user.profile') }}" class="user-profile-dropdown-content">
                                <span class="fa fa-user fa-dropdown"></span>
                                Profile
                            </a>
                            <a href="#" class="user-profile-dropdown-content">
                                <span class="fa fa-heart fa-dropdown"></span>
                                List
                            </a>
                            <form action="{{ route('logout') }}"
                                class="logout-form user-profile-dropdown-content" method="POST">
                                @csrf
                                
                                <button type="submit" class="btn-logout">
                                    <span class="fa fa-sign-out-alt fa-dropdown"></span>
                                    Log out
                                </button>
                            </form>
                        </div>
                    </div>                
                @endauth
            </div>
            <nav class="navigation-bar">
                <div>
                    <ul class="navigation-bar-list">
                        <a href="{{ route('welcome') }}"><li>Home</li></a>
                        <a href="#"><li>Categories</li></a>
                        <a href="#"><li>Services</li></a>
                        <a href="#"><li>Sell</li></a>
                        <a href="#"><li>About</li></a>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')

        <footer>
            <div class="social-network">
                <a href="#"><span class="fab fa-instagram white-icon"></span></a>
                <a href="#"><span class="fab fa-twitter white-icon"></span></a>
                <a href="#"><span class="fab fa-telegram white-icon"></span></a>
            </div>
            <div class="copyright">
                Copyright &copy, e-commerce.com
            </div>
        </footer>
    </body>
</html>
