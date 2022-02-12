<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>DIFFCA - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/venobox/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    @livewireStyles
</head>
<body>

<livewire:auth.login>

<div class="preloader">
    <img src="{{ asset('images/preloader-2.gif') }}" alt="preloader">
</div>

<header class="fixed-top header">
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4 col-sm-12 text-center text-lg-left">
                    <a class="text-color mr-3" href="callto:+443003030266"><strong>Teléfono</strong> +52 844 000 0000</a>
                    <ul class="list-inline d-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 text-center text-lg-right">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" style="font-size: 15px;" href="http://dycea.software/diffca/" target="_blank">Iniciar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="{{ route('index') }}"><img src="https://diffca.com/wp-content/uploads/2018/10/LOGO2.png" alt="logo"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('index') }}">Inicio</a>
                        </li>
                        <li class="nav-item {{ Request::is('nosotros') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                        </li>
                        <li class="nav-item {{ Request::is('servicios') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('services') }}">Servicios</a>
                        </li>
                        <li class="nav-item {{ Request::is('indicadores*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('indicators') }}">Indicadores</a>
                        </li>
                        <li class="nav-item {{ Request::is('dof*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dof') }}">DOF</a>
                        </li>
                        <li class="nav-item {{ Request::is('blog*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item {{ Request::is('contacto') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="footer bg-footer section border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                    <a class="logo-footer" href="{{ route('index') }}"><img class="img-fluid mb-4" src="https://diffca.com/wp-content/uploads/2018/10/LOGO2.png" alt="logo"></a>
                    <ul class="list-unstyled">
                        <li class="mb-2">P.º de los Claveles 485, Residencial San Patricio, 26450 Coahuila, Coah.</li>
                        <li class="mb-2">+52 844 000 0000</li>
                        <li class="mb-2">contacto@diffca.com</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0"></div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">MENÚ</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="{{ route('about') }}">Nosotros</a></li>
                        <li class="mb-3"><a class="text-color" href="{{ route('services') }}">Servicios</a></li>
                        <li class="mb-3"><a class="text-color" href="{{ route('contact') }}">Contacto</a></li>
                        <li class="mb-3"><a class="text-color" href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">ACCESOS</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="http://dycea.software/diffca/" target="_blank">Iniciar Sesión</a></li>
                        @guest
                        <li class="mb-3"><a class="text-color" href="#" data-toggle="modal" data-target="#loginModal">Acceso al Gestor</a></li>
                        @else
                        <li class="mb-3"><a class="text-color" href="{{ route('home') }}" data-toggle="tooltip" title="Ir al Sistema">Sesión iniciada como {{ auth()->user()->name }}</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright &copy; {{ date('Y') }} DIFFCA</p>
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-twitter-alt text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-linkedin text-primary"></i></a></li>
                        <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

@livewireScripts
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/aos/aos.js') }}"></script>
<script src="{{ asset('plugins/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
@yield('scripts')
</body>
</html>