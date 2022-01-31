<div wire:ignore.self class="modal fade" id="new-value" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Nuevo Valor</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="store()" class="row" autocomplete="off">
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
                        <input type="text" class="form-control mb-3" id="type" wire:model.defer="type" placeholder="Tipo de valor">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control mb-3" rows="2" wire:model.defer="description" placeholder="Descripción del valor"></textarea>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="value" wire:model.defer="value" placeholder="Valor representativo">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="symbol" wire:model.defer="symbol" placeholder="Símbolo representativo">
                    </div>
                    <div class="col-12">
                        <input type="date" class="form-control mb-3" id="updated_date" wire:model.defer="updated_date" placeholder="Última actualización">
                    </div>
                    <div class="col-12">
                        <button type="submit" wire:loading.prevent="disabled" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>