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
    <style type="text/css">
        i {
            cursor: pointer;
        }
    </style>
    @livewireStyles
</head>
<body>

<livewire:auth.login>

<div class="preloader">
    <img src="{{ asset('images/preloader-2.gif') }}" alt="preloader">
</div>

<header class="fixed-top header">
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="https://diffca.com/wp-content/uploads/2018/10/LOGO2.png" alt="logo"></a>
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}" target="_blank">Ir al Sitio</a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/catalogo-de-valores') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('catalog-values') }}">Catálogo de Valores</a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/categorias') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('categories') }}">Categorias</a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/noticias') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('news') }}">Noticias</a>
                        </li>
                        <li class="nav-item">
                            @auth
                                @livewire('auth.logout')
                            @endauth
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0 text-white">Copyright &copy; {{ date('Y') }} DIFFCA</p>
                </div>
            </div>
        </div>
    </div>
</footer>

@livewireScripts
<script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/aos/aos.js') }}"></script>
<script src="{{ asset('plugins/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('plugins/filterizr/jquery.filterizr.min.js') }}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield('scripts')
</body>
</html>