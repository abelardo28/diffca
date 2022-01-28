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
                <div class="col-md-4 text-right">
                    <button class="btn btn-primary btn-sm" wire:click="create()">Nueva noticia</button>
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
                            <button type="button" class="btn btn-danger btn-sm float-right" wire:click="delete({{ $new->id }})" onclick="confirm('¿Está seguro de eliminar la noticia?') || event.stopImmediatePropagation()">
                                <i class="ti-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('livewire.admin.news.new-new')
    @include('livewire.admin.news.edit-new')
</div>
