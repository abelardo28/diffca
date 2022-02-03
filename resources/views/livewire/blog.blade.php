@section('title', 'Blog de Noticias')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Blog</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                    <p class="text-lighten">Sigue nuestro blog donde publicamos noticias que pueden ser de ayuda para ti o tu empresa, manteniendose actualizados sobre temas como contabilidad, trámites ante SAT, nuevas leyes, entre otras.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach($blogs as $blog)
                        <article class="col-lg-12 col-sm-6 mb-4">
                            <div class="card rounded-0 border border-primary hover-shadow">
                                @if($blog->image)
                                <img class="card-img-top rounded-0" src="{{ asset('blog-images/'.$blog->image) }}" alt="{{ $blog->title }}">
                                @endif
                                <div class="card-body">
                                    <ul class="list-inline mb-3">
                                        <li class="list-inline-item mr-3 ml-0">{{ $blog->created_at->diffForHumans() }}</li>
                                        <li class="list-inline-item mr-3 ml-0">Por {{ $blog->user->name }}</li>
                                    </ul>
                                    <a href="{{ route('blog-detail', $blog->url) }}">
                                        <h4 class="card-title">{{ $blog->title }}</h4>
                                    </a>
                                    <p class="card-text mb-1">{!! substr($blog->content, 0, 160) !!}...</p>
                                    <span class="badge bg-secondary text-white">{{ $blog->category->name }}</span><br>
                                    <a href="{{ route('blog-detail', $blog->url) }}" class="btn btn-primary btn-sm mt-2">Leer más</a>
                                </div>
                            </div>
                        </article>
                        @if($loop->iteration % 3 == 0)
                            </div>
                            <div class="row">
                        @endif
                        @endforeach
                    </div>
                    {{-- <p><a role="button" class="btn btn-link" wire:click="showMore()">Mostrar más noticias</a></p> --}}
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Categorías</h5>
                            <ul class="list-styled">
                                @foreach($categories as $category)
                                <li class="my-4 text-uppercase"><a role="button" class="text-secondary" wire:click="filterCategory({{ $category->id }})">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>