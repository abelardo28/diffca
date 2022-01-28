@section('title', 'Blog de Noticias')

<div>
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Blog</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <article class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-3">
                                <li class="list-inline-item mr-3 ml-0">{{ $blog->created_at->diffForHumans() }}</li>
                                <li class="list-inline-item mr-3 ml-0">Por {{ $blog->user->name }}</li>
                            </ul>
                            <a href="blog-single.html">
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
</div>