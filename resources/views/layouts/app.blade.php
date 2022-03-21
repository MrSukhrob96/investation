<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-left">
                <i class="fa fa-envelope-o"></i> <a href="mailto:contact@gmail.com">info@gmail.com</a>
                <i class="fa fa-phone"></i>+926352444
            </div>
            <div class="social-links float-right">
                <a href="#" class=""><i class="fa fa-user"></i> &nbsp; Войти</a>
                <a href="#" class="active"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </section>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <img src="./assets/img/logo.png">
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html">Главная</a></li>
                    <li><a href="#about">О Компании</a></li>
                    <li><a href="#investision">Инвестиции</a></li>
                    <li><a href="#portfolio">Проекты</a></li>
                    <li><a href="#team">Бизнес</a></li>
                    <li><a href="#news">Новости</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
</body>

</html>