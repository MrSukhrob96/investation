<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Company</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <link href="assets/img/logo.png" rel="icon">
    <link href="assets/img/logo.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/test.css') }}" rel="stylesheet">
</head>

<body>
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="row justify-content-between" style="display: flex">
                <div class="contact-info float-left">
                    <i class="fa fa-envelope-o"></i> <a href="mailto:contact@gmail.com">info@gmail.com</a>
                    <i class="fa fa-phone"></i>+926352444
                </div>
                <div class="social-links float-right">
                    <a href="{{ url('login') }}" class=""><i class="fa fa-user"></i> &nbsp; Войти</a>
                    <a href="#" class="active"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </div>
    </section>
    <header id="header">
        <div class="container">
            <a href="{{ url('/') }}" id="logo" class="pull-left">
                <img src="./images/logo.png" class="header__logo">
            </a>
            @if (url()->current() == 'http://localhost:8000')
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
            @endif
        </div>
    </header>
    @yield('content')

    <footer id="footer" class="mt-5">
        <div class="container">
            <div class="copyright">
                &copy; <strong>Company name</strong> 2021
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/vendor/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hoverIntent/hoverIntent.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>