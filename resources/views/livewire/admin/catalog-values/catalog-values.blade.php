@section('title', 'Panel de Administración')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="{{ asset('images/backgrounds/page-title.jpg') }}" style="background-image: url(&quot;images/backgrounds/page-title.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Catálogo de Valores</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-right">
                    <button class="btn btn-primary btn-sm" wire:click="create()">Nuevo Valor</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="text-center">Valor</th>
                            <th class="text-center">Símbolo</th>
                            <th class="text-center">Última Actualización</th>
                            <th class="text-center">Representación</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($values as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td class="text-center">{{ $value->value ?? 'N/D' }}</td>
                            <td class="text-center">{{ $value->symbol ?? 'N/D' }}</td>
                            <td class="text-center">{{ $value->updated_date ?? 'N/D' }}</td>
                            <td class="text-center">{{ $value->type == 1 ? 'Valor Único' : 'Árbol de Indicadores' }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm px-3" wire:click="edit({{ $value->id }})"><i class="ti-pencil"></i></button>
                                <button type="button" class="btn btn-danger btn-sm px-3" wire:click="delete({{ $value->id }})" onclick="confirm('¿Está seguro de eliminar el valor?') || event.stopImmediatePropagation()"><i class="ti-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @include('livewire.admin.catalog-values.new-value')
    @include('livewire.admin.catalog-values.edit-value')
</div>
