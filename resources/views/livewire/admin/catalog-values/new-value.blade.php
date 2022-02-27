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
                        <label>*Indicador Principal:</label>
                        <select class="form-control mb-3" id="indicator" wire:model.defer="indicator">
                            <option value="">Seleccione el indicador principal</option>
                            @foreach($indicators as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12">
                        <label>*Nombre:</label>
                        <input type="text" class="form-control mb-3" id="name" wire:model.defer="name" placeholder="Nombre">
                    </div>
                    <div class="col-12">
                        <label>Descripción:</label>
                        <textarea class="form-control mb-3" wire:model.defer="description" placeholder="Descripción del valor"></textarea>
                    </div>
                    <div class="col-4">
                        <label>Valor:</label>
                        <input type="text" class="form-control mb-3" id="value" wire:model.defer="value" placeholder="Valor (Ej. 1, 9.0)">
                    </div>
                    <div class="col-4">
                        <label>Símbolo:</label>
                        <input type="text" class="form-control mb-3" id="symbol" wire:model.defer="symbol" placeholder="Símbolo (Ej. $, %)">
                    </div>
                    <div class="col-4">
                        <label>*Fecha de Actualización:</label>
                        <input type="date" class="form-control mb-3" id="updated_date" wire:model.defer="updated_date" placeholder="Última actualización">
                    </div>
                    <div class="col-12">
                        <label>*Representación:</label>
                        <select class="form-control mb-3" id="type" wire:model.defer="type">
                            <option value="">Seleccione tipo de representación</option>
                            <option value="1">Valor único</option>
                            <option value="2">Árbol de Indicadores</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label>Archivo de Datos (CSV):</label>
                        <input type="file" class="form-control mb-3" id="file" wire:model.defer="file">
                    </div>
                    <div class="col-12">
                        <button type="submit" wire:loading.prevent="disabled" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>