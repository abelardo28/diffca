@section('title', 'Nosotros')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Nosotros</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                    <p class="text-lighten">Conoce más a detalle a nuestra empresa y de los valores que nos enriquecen.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid w-100 mb-4" src="{{ ('images/equipo.jpg') }}" alt="about image">
                    <h2 class="section-title">DIFFCA</h2>
                    <p>Somos un grupo de profesionales expertos en contabilidad, impuestos y asesoría fiscal, comprometidos con México, con nuestros valores y con el crecimiento de nuestros clientes.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="section-title">Misión</h3>
                    <p>Contribuir con el sector productivo de la Región en el cumplimiento correcto y oportuno de sus obligaciones fiscales mediante servicios contables y de asesoría fiscal personalizada por profesionales comprometidos y con alto nivel de conocimientos.</p>
                </div>
                <div class="col-6">
                    <h3 class="section-title">Visión</h3>
                    <p>Permanecer como la mejor opción de servicios personalizados Contables y de Asesoría Fiscal manteniendo la confianza de nuestros clientes agregando valor en su beneficio.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/responsabilidad.jpg') }}" alt="Responsabilidad">
                        <div class="card-body">
                            <h4 class="card-title">Responsabilidad</h4>
                            <p class="card-text">Garantizamos a nuestros clientes un servicio profesional de alta calidad para colaborar en el cumplimiento correcto y oportuno de sus objetivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/confiabilidad.png') }}" alt="Confiabilidad">
                        <div class="card-body">
                            <h4 class="card-title">Confiabilidad</h4>
                            <p class="card-text">Reservamos la información que nos confían nuestros clientes, protegiendo su manejo exclusivo por el personal de DIFFCA ASESORES S.C.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/espiritudeservicio.png') }}" alt="Espíritu de servicio">
                        <div class="card-body">
                            <h4 class="card-title">Espíritu de Servicio</h4>
                            <p class="card-text">Nos agrada colaborar con nuestros clientes en el logro de sus objetivos, con amabilidad y buena fe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/honestidad.png') }}" alt="Honestidad">
                        <div class="card-body">
                            <h4 class="card-title">Honestidad</h4>
                            <p class="card-text">Proporcionamos a nuestros clientes estrategias legales válidas con rectitud y profesionalismo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/honradez.png') }}" alt="Honradez">
                        <div class="card-body">
                            <h4 class="card-title">Honradez</h4>
                            <p class="card-text">Cuidamos con respeto la información que nos proporcionan nuestros clientes, protegiendo su integridad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/compromiso.png') }}" alt="Compromiso">
                        <div class="card-body">
                            <h4 class="card-title">Compromiso</h4>
                            <p class="card-text">En cada uno de nuestros servicios nos unimos profesionalmente a los objetivos de nuestros clientes buscando soluciones válidas en cada caso.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0 h-100">
                        <img class="card-img-top rounded-0" src="{{ asset('images/seguridad.png') }}" alt="Seguridad">
                        <div class="card-body">
                            <h4 class="card-title">Seguridad</h4>
                            <p class="card-text">Defendemos ante las autoridades las causas e intereses de nuestros clientes en su representación, procurando su tranquilidad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>