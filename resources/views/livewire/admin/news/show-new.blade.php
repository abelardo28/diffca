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
                    <p>{!! $blog->content !!}</p>
                </div>
                <button class="btn btn-primary btn-sm mt-2" wire:click="edit()">Editar noticia</button>
            </div>
        </div>
    </section>
    @include('livewire.admin.news.edit-new')
</div>
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        ClassicEditor.create(document.querySelector('textarea[name=content]'))
        .then(function(editor){
            editor.model.document.on('change:data', () => {
                @this.set('content', editor.getData());
            });
            Livewire.on('resetContent', () => {
                editor.setData('');
            })
        })
        .catch(error => {
            console.log(error);
        });
    </script>
@endsection