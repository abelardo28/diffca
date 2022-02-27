@section('title', 'Contacto')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Contacto</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                    <p class="text-lighten">Si tienes dudas o preguntas acerca de nuestros servicios, contáctate ahora mismo con nosotros.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Contáctanos ahora mismo</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <form wire:submit.prevent="send()" autocomplete="off">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-0">
                                @foreach ($errors->all() as $error)
                                    <li><i class="mdi mdi-close pr-2"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <input type="text" class="form-control mb-3" id="name" wire:model.defer="name" name="name" placeholder="Nombre">
                        <input type="email" class="form-control mb-3" id="email" wire:model.defer="email" name="email" placeholder="Correo Electrónico">
                        <input type="text" class="form-control mb-3" id="phone" wire:model.defer="phone" name="phone" placeholder="Teléfono/Celular">
                        <textarea name="message" id="message" wire:model.defer="message" class="form-control mb-3" placeholder="Mensaje"></textarea>
                        <button type="submit" value="send" class="btn btn-primary">Enviar Mensaje</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5">Eentendemos tus necesidades y tus problemas, es por eso que mantenemos a un equipo de trabajo especializado para brindarte una buena atención y contar con tu satisfacción para seguir creciendo como empresa y tener la motivación suficiente para seguir apoyando a la sociedad en los temas que cubrimos.</p>
                    <a href="tel:+8802057843248" class="text-color h5 d-block">+52 844 439 2240</a>
                    <a href="mailto:contacto@diffca.com" class="mb-5 text-color h5 d-block">recepcion@diffca.com</a>
                    <p>Paseo de los Claveles 485, San Patricio, 25204 Saltillo, Coah.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11772.318327460835!2d-100.959363118673!3d25.455410113999157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9acbc327d4f293c!2sDIFFCA%20ASESORES%2C%20S.C.!5e0!3m2!1sen!2smx!4v1642710920162!5m2!1sen!2smx" height="500" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</div>