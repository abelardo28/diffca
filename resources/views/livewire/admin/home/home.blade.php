@section('title', 'Panel de Administración')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}" style="background-image: url(&quot;images/backgrounds/page-title.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Inicio</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <a href="{{ route('categories') }}">
                                <h4 class="card-title">Categorías</h4>
                            </a>
                            <p class="card-text mb-4"> Gestión de las categorías por las que se agrupan.</p>
                            <a href="{{ route('categories') }}" class="btn btn-primary btn-sm">Ir al Módulo</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <a href="{{ route('news') }}">
                              <h4 class="card-title">Noticias</h4>
                            </a>
                            <p class="card-text mb-4"> Gestión de las noticias publicadas en el sitio principal.</p>
                            <a href="{{ route('news') }}" class="btn btn-primary btn-sm">Ir al Módulo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>