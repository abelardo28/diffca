@section('title', 'Panel de Administración')

<div>
    <section class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}" style="background-image: url(&quot;images/backgrounds/page-title.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Categorias</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <button class="btn btn-primary btn-sm">Nueva categoria</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($categories as $category)
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/courses/course-1.jpg') }}" alt="{{ $category->category }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $category->category }}</h4>
                            <p class="card-text mb-4">{{ $category->description }}</p>
                            <button class="btn btn-primary btn-sm" wire:click="edit({{ $category->id }})">Editar categoria</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>