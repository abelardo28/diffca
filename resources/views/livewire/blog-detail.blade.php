@section('title', $blog->title)

<div>
    <section wire:ignore class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('blog') }}">Blog</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">{{ $blog->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sm bg-gray">
        <div class="container">
            <div class="row">
                @if($blog->image)
                <div class="col-12 mb-4">
                    <img src="{{ asset('blog-images/'.$blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100">
                </div>
                @endif
                <div class="col-12">
                    <ul class="list-inline">
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Por:</span>{{ $blog->user->name }}</li>
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-calendar mr-2"></i> {{ $blog->created_at->diffForHumans() }}</li>
                        <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="badge bg-secondary text-white">{{ $blog->category->name }}</span></li>
                    </ul>
                </div>
                <div class="col-12 mt-4">
                    <div class="border-bottom border-primary"></div>
                </div>
                <div class="col-12 mb-5 mt-4 blog-content">
                    <h2>{{ $blog->title }}</h2>
                    <p>@php echo $blog->content @endphp</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">Recientes</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{ asset('images/blog/post-1.jpg') }}" alt="Post thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
                                <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
                            </ul>
                            <a href="blog-single.html">
                                <h4 class="card-title">Lorem ipsum dolor amet, adipisicing eiusmod tempor.</h4>
                            </a>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin...</p>
                            <a href="blog-single.html" class="btn btn-primary btn-sm">Leer más</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> --}}
</div>