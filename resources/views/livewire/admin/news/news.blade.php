@section('title', 'Panel de Administración')

<div>
    <section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}" style="background-image: url(&quot;images/backgrounds/page-title.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Noticias</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($news as $new)
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/courses/course-1.jpg') }}" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>{{ $new->created_at->diffForHumans() }}</li>
                              <li class="list-inline-item"><a class="text-color">Por {{ $new->user->name }}</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">{{ $new->title }}</h4>
                            </a>
                            <p class="card-text mb-4"> {{ substr($new->content, 0, 140) }}...</p>
                            <button class="btn btn-primary btn-sm" wire:click.prevent="edit({{ $new->id }})">Editar noticia</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div wire:ignore.self class="modal fade" id="edit-new" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Editar Noticia</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update()" class="row" autocomplete="off">
                        @if($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <ul class="mb-0 pl-0">
                                    @foreach ($errors->all() as $error)
                                        <li><i class="mdi mdi-close pr-2"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="title" wire:model.defer="title" placeholder="Título de la noticia">
                        </div>
                        <div class="col-12">
                            <input type="file" class="form-control mb-3" id="image" wire:model.defer="image">
                        </div>
                        <div class="col-12">
                            <button type="submit" wire:loading.prevent="disabled" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
