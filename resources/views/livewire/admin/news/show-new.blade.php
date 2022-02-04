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
                    @if($errors->any())
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul class="mb-0 pl-0">
                                @foreach ($errors->all() as $error)
                                    <li><i class="mdi mdi-close pr-2"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <select class="form-control mb-3" name="category" wire:model.defer="category">
                            <option value="0">Seleccione la categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-3" name="title" wire:model.defer="title" placeholder="Título de la noticia">
                    </div>
                    <div class="form-group" wire:ignore>
                        <textarea class="form-control mb-3" id="editor" name="content" wire:model.defer="content"></textarea>
                    </div>
                    <div class="form-group px-0 mt-3">
                        <input type="file" class="form-control mb-3" name="image" wire:model.defer="image">
                    </div>
                    @if($image)
                    <div class="form-group">
                        <img src="{{ $image->temporaryUrl() }}">
                    </div>
                    @endif
                    <div class="form-group">
                        <button type="button" wire:click.prevent="update()" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        ClassicEditor.create(document.querySelector('#editor'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('content', editor.getData());
            })
        })
        .catch(error => {
            console.log(error);
        });
    </script>
@endsection