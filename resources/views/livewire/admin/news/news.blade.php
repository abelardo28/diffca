@section('title', 'Panel de Administración')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}">
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
                        @if($new->image)
                        <img class="card-img-top rounded-0" src="{{ asset('blog-images/'.$new->image) }}" alt="{{ $new->title }}">
                        @endif
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>{{ $new->created_at->diffForHumans() }}</li>
                              <li class="list-inline-item"><a class="text-color">Por {{ $new->user->name }}</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">{{ $new->title }}</h4>
                            </a>
                            <p class="card-text mb-1">{!! substr($new->content, 0, 140) !!}...</p>
                            <span class="badge bg-secondary text-white">{{ $new->category->name }}</span><br>
                            <a role="button" class="btn btn-primary btn-sm mt-2" href="{{ route('show-new', $new->id) }}">Revisar noticia</a>
                            <button type="button" class="btn btn-danger btn-sm float-right mt-2" wire:click="delete({{ $new->id }})" onclick="confirm('¿Está seguro de eliminar la noticia?') || event.stopImmediatePropagation()">
                                <i class="ti-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div wire:ignore.self class="modal fade" id="new-new" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Nueva Noticia</h3>
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
                    <div class="form-group mt-3">
                        <input type="file" class="form-control mb-3" name="image" wire:model.defer="image">
                    </div>
                    <div class="form-group">
                        <button type="button" wire:click.prevent="store()" class="btn btn-primary">Guardar cambios</button>
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