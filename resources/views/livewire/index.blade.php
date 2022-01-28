@section('title', 'Inicio')

<div>
    <section class="hero-section overlay bg-cover" data-background="{{ asset('images/banner.jpg') }}">
        <div class="container">
            <div class="hero-slider">
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Compromiso y Confianza</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Nosotros</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Compromiso y Confianza</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Servicios</a>
                        </div>
                    </div>
                </div>
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Compromiso y Confianza</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray overflow-md-hidden">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">
                    {{-- <img class="img-fluid w-100" src="images/banner/banner-feature.png" alt="banner-feature"> --}}
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between">
                        <div class="col-sm-6 col-xl-5 mb-xl-2 mb-lg-1 mb-1 text-center text-sm-left">
                            <h4 class="mb-xl-2 mb-lg-2 mb-2">Tipo de Cambio</h4>
                            <small class="text-secondary">Valor: </small><span class="font-weight-bold" id="last-value-tipo-cambio">0</span>
                            <span class="float-right"><small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-tipo-cambio">0</span></span>
                            <figure class="highcharts-figure">
                                <div id="container-tipo-cambio"></div>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-2 mb-lg-1 mb-1 text-center text-sm-left">
                            <h4 class="mb-xl-2 mb-lg-2 mb-2">INPC</h4>
                            <small class="text-secondary">Valor: </small><span class="font-weight-bold" id="last-value-inpc">0</span>
                            <span class="float-right"><small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-inpc">0</span></span>
                            <figure class="highcharts-figure">
                                <div id="container-inpc"></div>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                            <h4 class="mb-xl-2 mb-lg-2 mb-2">UDIS</h4>
                            <small class="text-secondary">Valor:</small>
                            <h2 class="text-primary" id="value-udis"> 0</h2>
                            <small class="text-secondary">Act. </small><span class="font-weight-bold" id="date-udis">0</span>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                            <h4 class="mb-xl-2 mb-lg-2 mb-2">Inflación</h4>
                            <small class="text-secondary">Valor:</small>
                            <h2 class="text-primary"> 278.802</h2>
                            <small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-tipo-cambio">24/01/2022</span>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                            <h4 class="mb-xl-2 mb-lg-2 mb-2">Recargos de Mora</h4>
                            <small class="text-secondary">Valor:</small>
                            <h2 class="text-primary"> 1.47%</h2>
                            <small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-tipo-cambio">24/01/2022</span>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                            <h4 class="mb-xl-2 mb-lg-2 mb-2">Recargos Plazo</h4>
                            <small class="text-secondary">Valor:</small>
                            <h2 class="text-primary"> 0.98%</h2>
                            <small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-tipo-cambio">24/01/2022</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">DIFFCA</h2>
                    <p>Somos un grupo de profesionales expertos en contabilidad, impuestos y asesoría fiscal, comprometidos con México, con nuestros valores y con el crecimiento de nuestros clientes.</p>
                    <a href="{{ route('about') }}" class="btn btn-primary-outline">Leer más</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{ asset('images/equipo.jpg') }}" alt="equipo">
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Esto es lo que somos y lo que hacemos</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/responsabilidad.jpg') }}" alt="Responsabilidad">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Responsabilidad</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/contabilidad.png') }}" alt="contabilidad">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Contabilidad</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/confiabilidad.png') }}" alt="Confiabilidad">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Confiabilidad</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/impuestos.png') }}" alt="impuestos">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Impuestos</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/espiritudeservicio.png') }}" alt="Espíritu de servicio">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Espíritu de Servicio</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/asesoriafiscal.png') }}" alt="asesoría fiscal">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Asesoría Fiscal y Patrimonial</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/honestidad.png') }}" alt="Honestidad">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Honestidad</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/auditoria.png') }}" alt="auditoria">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Auditoría</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/nomina.png') }}" alt="nomina">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Nómina</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/compromiso.png') }}" alt="compromiso">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Compromiso</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/representantefiscal.png') }}" alt="Representación fiscal">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Representación Ante Autoridades Fiscales</h4>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/seguridad.png') }}" alt="Seguridad">
                        <div class="card-body">
                            <a href="course-single.html" class="text-center">
                                <h4 class="card-title">Seguridad</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="60">60</h2>
                        <h5 class="text-white">SOLUCIONES</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="50">50</h2>
                        <h5 class="text-white">AUDITORÍAS</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="100">100</h2>
                        <h5 class="text-white">CASOS DE ÉXITO</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
                    <div class="text-center">
                        <h2 class="count text-white" data-count="3737">3737</h2>
                        <h5 class="text-white">CLIENTES SATISFECHOS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Noticias</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($blogs as $blog)
                <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item mr-3 ml-0">{{ $blog->created_at->diffForHumans() }}</li>
                                <li class="list-inline-item mr-3 ml-0">Por {{ $blog->user->name }}</li>
                            </ul>
                            <a href="{{ route('blog-detail', $blog->url) }}">
                                <h4 class="card-title">{{ $blog->title }}</h4>
                            </a>
                            <p class="card-text">{{ substr($blog->content, 0, 140) }}...</p>
                            <a href="{{ route('blog-detail', $blog->url) }}" class="btn btn-primary btn-sm">Leer más</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
<div>

@section('scripts')
<script type="text/javascript">
  //Chart tipo de cambio
Highcharts.getJSON(
    "{{ route('tipo-cambio') }}",
    function (data) {
        Highcharts.chart('container-tipo-cambio', {
            exporting: {enabled:false},
            credits: {enabled:false},
            chart: {
                backgroundColor: '#f8f8f8',
                height: 150,
                zoomType: 'x'
            },
            title: {text: ''},
            xAxis: {
                visible: false,
                type: 'datetime',
                labels: {enabled: false}
            },
            yAxis: {
                visible: false,
                labels: {enabled: false},
                title: {text: null}
            },
            legend: {enabled: false},
            plotOptions: {
                area: {
                    marker: {radius: 2},
                    lineWidth: 1,
                    states: {hover: {lineWidth: 1}},
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: 'Valor',
                data: data,
                color: '#c19500'
            }]
        });
        $('#last-date-tipo-cambio').html(data.at(-1)[0])
        $('#last-value-tipo-cambio').html(data.at(-1)[1])
    }
);

//Chart inpc
Highcharts.getJSON(
    "{{ route('inpc') }}",
    function (data) {
        Highcharts.chart('container-inpc', {
            exporting: {enabled:false},
            credits: {enabled:false},
            chart: {
                backgroundColor: '#f8f8f8',
                height: 150,
                zoomType: 'x'
            },
            title: {text: ''},
            xAxis: {
                visible: false,
                type: 'datetime',
                labels: {enabled: false}
            },
            yAxis: {
                visible: false,
                labels: {enabled: false},
                title: {text: null}
            },
            legend: {enabled: false},
            plotOptions: {
                area: {
                    marker: {radius: 2},
                    lineWidth: 1,
                    states: {hover: {lineWidth: 1}
                    },
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: 'Valor',
                data: data,
                color: '#c19500'
            }]
        });
        $('#last-date-inpc').html(data.at(-1)[0])
        $('#last-value-inpc').html(data.at(-1)[1])
    }
);

$(function(){
    $.ajax({
        url : "{{ route('udis') }}",
        dataType : 'json',
        success : function(data) {
            console.log(data.at(-1)[0]);
            $("#value-udis").html(data.at(-1)[1]);
            $("#date-udis").html(data.at(-1)[0]);
        }
    });
});
</script>
@endsection