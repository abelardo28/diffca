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
                        <textarea class="form-control mb-3" rows="4" id="content" wire:model.defer="content" placeholder="Contenido de la noticia"></textarea>
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