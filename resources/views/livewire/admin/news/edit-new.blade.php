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
                        <select class="form-control mb-3" name="category" wire:model.defer="category">
                            <option value="0">Seleccione la categoria</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" name="title" wire:model.defer="title" placeholder="Título de la noticia">
                    </div>
                    <div class="col-12" wire:ignore>
                        <textarea class="form-control mb-3" name="content" wire:model.defer="content"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="file" class="form-control-file mb-3" name="image" wire:model.defer="image">
                    </div>
                    <div class="col-12">
                        <button type="submit" wire:loading.prevent="disabled" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>