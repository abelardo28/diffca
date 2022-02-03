@section('title', 'DOF')

<div>
    <section wire:ignore class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Diario Oficial de la Federación</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                    <p class="text-lighten">Diario Oficial de la Federación.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-3 my-auto">
                        <div class="form-group mb-0">
                            <label for="date" class=" font-weight-bold mr-3">Fecha del Diario:</label>
                            <input type="date" style="height: 40px;" class="form-control mr-3" id="date" name="date" wire:model="date">
                        </div>
                    </div>
                    <div class="col-md-6 text-center my-auto">
                        <a href="http://dof.gob.mx/nota_to_pdf.php?fecha={{ date('d/m/Y') }}&edicion=MAT" target="_blank">
                            <i class="ti-file text-muted" style="font-size:50px;"></i>
                            <p class="font-weight-bold mb-0">Descargar Documento</p>
                        </a>
                    </div>
                    <div class="col-md-3 my-auto">
                        <p class="font-weight-bold mb-1">Actualización:</p>
                        {{ $updatedDate }}
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    @foreach($response as $key => $resp)
                    <div class="card mb-2">
                        <div class="card-title bg-primary text-white font-weight-bold p-3">{{ $key }}</div>
                        <div class="card-body py-1">
                        @foreach($resp as $notes)
                            <p class="text-justify">{{ $notes->note }}</p>
                        @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>