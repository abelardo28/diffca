@section('title', 'Indicadores')

@section('styles')
<style type="text/css">
    .form-control {
        height: 40px;
    }
    .table thead th{
        font-size: 12px;
    }
    .table tbody td{
        font-size: 12px;
    }
    .tree, .tree ul {
        margin:0;
        padding:0;
        list-style:none
    }
    .tree ul {
        margin-left:1em;
        position:relative
    }
    .tree ul ul {
        margin-left:.5em
    }
    .tree ul:before {
        content:"";
        display:block;
        width:0;
        position:absolute;
        top:0;
        bottom:0;
        left:0;
        border-left:1px solid
    }
    .tree li {
        margin:0;
        padding:0 1em;
        line-height:2em;
        font-weight:600;
        position:relative;
        cursor: pointer;
    }
    .title {
        font-size: 20px;
        color: #c19500;
    }
    .subtitle {
        font-size: 16px;
        color: #182b45;
    }
    .tree ul li:before {
        content:"";
        display:block;
        width:10px;
        height:0;
        border-top:1px solid;
        margin-top:-1px;
        position:absolute;
        top:1em;
        left:0
    }
    .tree ul li:last-child:before {
        background:#fff;
        height:auto;
        top:1em;
        bottom:0
    }
    .indicator {
        margin-right:5px;
    }
    .tree li a {
        text-decoration: none;
        color:#369;
    }
    .tree li button, .tree li button:active, .tree li button:focus {
        text-decoration: none;
        color:#369;
        border:none;
        background:transparent;
        margin:0px 0px 0px 0px;
        padding:0px 0px 0px 0px;
        outline: 0;
    }
</style>
@endsection

<div>
    <section wire:ignore class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary">Indicadores</a></li>
                        <li class="list-inline-item text-white h3 font-secondary"></li>
                    </ul>
                    <p class="text-lighten">Árbol de indicadores generales.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div wire:ignore class="col-md-12 col-12">
                    <ul id="tree2">
                        <li class="title">INPC
                            <ul>
                                <li class="subtitle" wire:click.prevent="getInformation('cpiu')">Indice de Inflación de EUA</li>
                                <li class="subtitle" wire:click.prevent="getInformation('inpc')">Indice Nacional de Precios al Consumidor</li>
                            </ul>
                        </li>
                        <li class="title">Recargos
                            <ul>
                                <li class="subtitle" wire:click.prevent="getInformation('riff')">Recargos e Intereses a Cargo del Fisco Federal</li>
                                <li class="subtitle" wire:click.prevent="getInformation('rppdp')">Recargos en Pago a Plazos Diferido o en Parcialidades</li>
                            </ul>
                        </li>
                        <li class="title">Salarios Mínimos
                            <ul>
                                <li class="subtitle" wire:click.prevent="getInformation('smg')">Salarios Mínimos Generales</li>
                                <li class="subtitle" wire:click.prevent="getInformation('smp')">Salarios Mínimos Profesionales</li>
                                <li class="subtitle" wire:click.prevent="getInformation('smf')">Salario Mínimo Federal EUA</li>
                            </ul>
                        </li>
                        <li class="title">Unidad de Medida y Actualización
                            <ul>
                                <li class="subtitle" wire:click.prevent="getInformation('uma')">Unidad de Medida y Actualización</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <br><br><br><br><br>
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-12">
                    @if($indicator == "inpc")
                    <h5 class="text-center mb-3">Índice de Nacional de Precios al Consumidor</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_month">De:</label>
                        <select class="form-control mx-2" id="start_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="start_year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017" selected>2017</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="end_year">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped" id="table-inpc">
                        <thead>
                            <tr><th></th><th>2017</th><th>2018</th><th>2019</th><th>2020</th><th>2021</th><th>2022</th></tr>
                        </thead>
                        <tbody>
                            <tr><th>Ene</th><td>93.604</td><td>98.795</td><td>103.103</td><td>106.447</td><td>110.210</td><td>118.002</td></tr>
                            <tr><th>Feb</th><td>94.145</td><td>99.171</td><td>103.079</td><td>106.889</td><td>110.907</td><td>0</td></tr>
                            <tr><th>Mar</th><td>94.722</td><td>99.492</td><td>103.476</td><td>106.838</td><td>111.824</td><td>0</td></tr>
                            <tr><th>Abr</th><td>94.839</td><td>99.155</td><td>103.531</td><td>105.755</td><td>112.190</td><td>0</td></tr>
                            <tr><th>May</th><td>94.725</td><td>98.994</td><td>103.233</td><td>106.162</td><td>112.419</td><td>0</td></tr>
                            <tr><th>Jun</th><td>94.964</td><td>99.376</td><td>103.299</td><td>106.743</td><td>113.018</td><td>0</td></tr>
                            <tr><th>Jul</th><td>95.323</td><td>99.909</td><td>103.687</td><td>107.444</td><td>113.682</td><td>0</td></tr>
                            <tr><th>Ago</th><td>95.794</td><td>100.492</td><td>103.670</td><td>107.867</td><td>113.899</td><td>0</td></tr>
                            <tr><th>Sep</th><td>96.094</td><td>100.917</td><td>103.942</td><td>108.114</td><td>114.601</td><td>0</td></tr>
                            <tr><th>Oct</th><td>96.698</td><td>101.440</td><td>104.503</td><td>108.774</td><td>115.561</td><td>0</td></tr>
                            <tr><th>Nov</th><td>97.695</td><td>102.303</td><td>105.346</td><td>108.856</td><td>116.884</td><td>0</td></tr>
                            <tr><th>Dic</th><td>98.273</td><td>103.020</td><td>105.934</td><td>109.271</td><td>117.308</td><td>0</td></tr>
                        </tbody>
                    </table>
                    <br><br>
                    <div id="container-inpc"></div>
                    @elseif($indicator == "cpiu")
                    <h5 class="text-center mb-3">Índice de Inflación de EUA</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_month">De:</label>
                        <select class="form-control mx-2" id="start_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="start_year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017" selected>2017</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="end_year">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th></th><th>2017</th><th>2018</th><th>2019</th><th>2020</th><th>2021</th><th>2022</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Ene</td><td>242.839</td><td>247.867</td><td>251.712</td><td>257.971</td><td>261.582</td><td>281.148</td></tr>
                            <tr><td>Feb</td><td>243.603</td><td>248.991</td><td>252.776</td><td>258.678</td><td>263.014</td><td>0.000</td></tr>
                            <tr><td>Mar</td><td>243.801</td><td>249.554</td><td>254.202</td><td>258.115</td><td>264.877</td><td>0.000</td></tr>
                            <tr><td>Abr</td><td>244.524</td><td>250.546</td><td>255.548</td><td>256.389</td><td>267.054</td><td>0.000</td></tr>
                            <tr><td>May</td><td>244.733</td><td>251.588</td><td>256.092</td><td>256.394</td><td>269.195</td><td>0.000</td></tr>
                            <tr><td>Jun</td><td>244.955</td><td>251.989</td><td>256.143</td><td>257.797</td><td>271.696</td><td>0.000</td></tr>
                            <tr><td>Jul</td><td>244.786</td><td>252.006</td><td>256.571</td><td>259.101</td><td>273.003</td><td>0.000</td></tr>
                            <tr><td>Ago</td><td>245.519</td><td>252.146</td><td>256.558</td><td>259.918</td><td>273.567</td><td>0.000</td></tr>
                            <tr><td>Sep</td><td>246.819</td><td>252.439</td><td>256.759</td><td>260.280</td><td>274.310</td><td>0.000</td></tr>
                            <tr><td>Oct</td><td>246.663</td><td>252.885</td><td>257.346</td><td>260.388</td><td>276.589</td><td>0.000</td></tr>
                            <tr><td>Nov</td><td>246.669</td><td>252.038</td><td>257.208</td><td>260.229</td><td>277.948</td><td>0.000</td></tr>
                            <tr><td>Dic</td><td>246.524</td><td>251.233</td><td>256.974</td><td>260.474</td><td>278.802</td><td>0.000</td></tr>
                        </tbody>
                    </table>
                    @elseif($indicator == "riff")
                    <h5 class="text-center mb-3">Recargos e Intereses a Cargo del Fisco General</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_month">De:</label>
                        <select class="form-control mx-2" id="start_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="start_year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017" selected>2017</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="end_year">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th></th><th>2017</th><th>2018</th><th>2019</th><th>2020</th><th>2021</th><th>2022</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Ene</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Feb</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Mar</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Abr</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>May</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Jun</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Jul</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Ago</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Sep</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Oct</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Nov</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                            <tr><td>Dic</td><td>1.13%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td><td>1.47%</td></tr>
                        </tbody>
                    </table>
                    @elseif($indicator == "rppdp")
                    <h5 class="text-center mb-3">Recargos en Pago a Plazos Diferido o en Parcialidades</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_month">De:</label>
                        <select class="form-control mx-2" id="start_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="start_year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017" selected>2017</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="end_year">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th></th><th>2017</th><th>2018</th><th>2019</th><th>2020</th><th>2021</th><th>2022</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Ene</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Feb</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Mar</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Abr</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>May</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Jun</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Jul</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Ago</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Sep</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Oct</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Nov</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                            <tr><td>Dic</td><td>0.75%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td><td>0.98%</td></tr>
                        </tbody>
                    </table>
                    @elseif($indicator == "smg")
                    <h5 class="text-center mb-3">Salarios Mínimos Generales</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_month">De:</label>
                        <select class="form-control mx-2" id="start_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="start_year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018" selected>2018</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_month">
                            <option value="Ene" selected>Ene</option>
                            <option value="Feb">Feb</option>
                            <option value="Mar">Mar</option>
                            <option value="Abr">Abr</option>
                            <option value="May">May</option>
                            <option value="Jul">Jul</option>
                            <option value="Ago">Ago</option>
                            <option value="Sep">Sep</option>
                            <option value="Oct">Ago</option>
                            <option value="Nov">Nov</option>
                            <option value="Dic">Dic</option>
                        </select>
                        <select class="form-control mx-2" id="end_year">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th>Mes</th><th>Área A</th><th>Área B</th><th>Área C</th><th>ZLFN</th><th>Fecha de publicación en DOF</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Ene-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Feb-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Mar-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Abr-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>May-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Jun-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Jul-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Ago-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Sep-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Oct-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Nov-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Dic-2018</td><td>88.36</td><td>0.00</td><td>0.00</td><td>0.00</td><td>21-Dic-2017</td></tr>
                            <tr><td>Ene-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Feb-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Mar-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Abr-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>May-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Jun-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Jul-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Ago-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Sep-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Oct-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Nov-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Dic-2019</td><td>102.68</td><td>0.00</td><td>0.00</td><td>176.72</td><td>26-Dic-2018</td></tr>
                            <tr><td>Ene-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Feb-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Mar-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Abr-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>May-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Jun-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Jul-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Ago-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Sep-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Oct-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Nov-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Dic-2020</td><td>123.22</td><td>0.00</td><td>0.00</td><td>185.56</td><td>23-Dic-2019</td></tr>
                            <tr><td>Ene-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Feb-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Mar-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Abr-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>May-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Jun-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Jul-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Ago-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Sep-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Oct-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Nov-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Dic-2021</td><td>141.70</td><td>0.00</td><td>0.00</td><td>213.39</td><td>23-Dic-2020</td></tr>
                            <tr><td>Ene-2022</td><td>172.87</td><td>0.00</td><td>0.00</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>Feb-2022</td><td>172.87</td><td>0.00</td><td>0.00</td><td>260.34</td><td>08-Dic-2021</td></tr>
                        </tbody>
                    </table>
                    @elseif($indicator == "smp")
                    <h5 class="text-center mb-3">Salarios Mínimos Profesionales</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_date">Fecha:</label>
                        <input type="date" class="form-control mx-2" name="date" value="{{ date('Y-m-d') }}">
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th>N°</th><th>Profesión, Oficio o Trabajo </th><th>Área A</th><th>Área B</th><th>Área C</th><th>ZLFN</th><th>DOF </th></tr>
                        </thead>
                        <tbody>
                            <tr><td>1</td><td>Albañilería; oficial de </td><td>199.42</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>2</td><td>Boticas; farmacias y droguería; dependiente(a) de mostrador en</td><td>176.28</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>3</td><td>Buldozer y/o traxcavo; operador(a) de</td><td>208.91</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>4</td><td>Cajero(a) de máquina registradora</td><td>179.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>5</td><td>Cantinero(a) preparador de bebidas</td><td>183.01</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>6</td><td>Carpintero(a) de obra negra </td><td>199.42</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>7</td><td>Carpintero(a) en la fabricación y reparación de muebles; oficial</td><td>196.14</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>8</td><td>Cocinero(a); mayor(a) en restaurantes; fondas y demás establecimientos de preparación y venta de alimentos</td><td>201.95</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>9</td><td>Colchones; oficial en fabricación y reparación de</td><td>184.82</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>10</td><td>Colocador(a) de mosaicos y azulejos; oficial</td><td>195.44</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>11</td><td>Construcción de edificios y casas habitación; yesero(a) en</td><td>186.12</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>12</td><td>Cortador(a) en talleres y fábricas de manufactura de calzado; oficial</td><td>181.24</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>13</td><td>Costurero(a) en confección de ropa en talleres o fábricas</td><td>179.08</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>14</td><td>Costurero(a) en confección de ropa en trabajo a domicilio</td><td>183.78</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>15</td><td>Chofer acomodador(a) de automóviles en estacionamientos </td><td>187.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>16</td><td>Chofer de camión de carga en general</td><td>203.52</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>17</td><td>Chofer de camioneta de carga en general </td><td>197.75</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>18</td><td>Chofer operador(a) de vehículos con grúa</td><td>190.22</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>19</td><td>Draga; operador(a) de</td><td>210.84</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>20</td><td>Ebanista en fabricación y reparación de muebles; oficial</td><td>198.97</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>21</td><td>Electricista instalador(a) y reparador(a) de instalaciones eléctricas; oficial</td><td>195.44</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>22</td><td>Electricista en la reparación de automóviles y camiones; oficial</td><td>197.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>23</td><td>Electricista reparador(a) de motores y/o generadores en talleres de servicio; oficial</td><td>190.22</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>24</td><td>Empleado(a) de góndola; anaquel o sección en tienda de autoservicio </td><td>175.77</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>25</td><td>Encargado(a) de bodega y/o almacén</td><td>182.04</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>26</td><td>Ferreterías y tlapalerías; dependiente(a) en</td><td>185.67</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>27</td><td>Fogonero(a) de calderas de vapor</td><td>191.61</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>28</td><td>Gasolinero(a); oficial</td><td>179.08</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>29</td><td>Herrería; oficial de</td><td>192.92</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>30</td><td>Hojalatero(a) en la reparación de automóviles y camiones; oficial</td><td>196.14</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>31</td><td>Jornalero(a) agrícola</td><td>195.43</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>32</td><td>Lubricador(a) de automóviles; camiones y otros vehículos de motor</td><td>180.44</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>33</td><td>Manejador(a) en granja avícola</td><td>173.86</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>34</td><td>Maquinaria agrícola; operador(a) de </td><td>200.41</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>35</td><td>Máquinas para madera en general; oficial operador(a) de </td><td>191.61</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>36</td><td>Mecánico(a) en reparación de automóviles y camiones; oficial</td><td>205.96</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>37</td><td>Montador(a) en talleres y fábricas de calzado; oficial</td><td>181.24</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>38</td><td>Peluquero(a) y cultor(a) de belleza </td><td>187.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>39</td><td>Pintor(a) de automóviles y camiones; oficial</td><td>192.92</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>40</td><td>Pintor(a) de casas; edificios y construcciones en general; oficial</td><td>191.61</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>41</td><td>Planchador(a) a máquina en tintorerías; lavandería y establecimientos similares </td><td>179.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>42</td><td>Plomero(a) en instalaciones sanitarias; oficial </td><td>191.95</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>43</td><td>Radiotécnico(a) reparador(a) de aparatos eléctricos y electrónicos; oficial </td><td>198.97</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>44</td><td>Recamarero(a) en hoteles; moteles y otros establecimientos de hospedaje </td><td>175.77</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>45</td><td>Refaccionaria de automóviles y camiones; dependiente(a) de mostrador en </td><td>182.04</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>46</td><td>Reparador(a) de aparatos eléctricos para el hogar; oficial</td><td>189.5</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>47</td><td>Reportero(a) en prensa diaria impresa</td><td>387.09</td><td>0</td><td>0</td><td>387.09</td><td>08-Dic-2021</td></tr>
                            <tr><td>48</td><td>Reportero(a) gráfico(a) en prensa diaria impresa</td><td>387.09</td><td>0</td><td>0</td><td>387.09</td><td>08-Dic-2021</td></tr>
                            <tr><td>49</td><td>Repostero(a) o pastelero(a) </td><td>199.42</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>50</td><td>Sastrería en trabajo a domicilio; oficial de</td><td>200.41</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>51</td><td>Secretario(a) auxiliar</td><td>205.55</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>52</td><td>Soldador(a) con soplete o con arco eléctrico</td><td>197.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>53</td><td>Tablajero(a) y/o carnicero(a) en mostrador</td><td>187.34</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>54</td><td>Tapicero(a) de vestiduras de automóviles; oficial</td><td>190.22</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>55</td><td>Tapicero(a) en reparación de muebles; oficial</td><td>190.22</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>56</td><td>Trabajador(a) del hogar </td><td>187.92</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>57</td><td>Trabajador(a) social; técnico(a) en </td><td>222.67</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>58</td><td>Vaquero(a) ordeñador a máquina</td><td>175.77</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>59</td><td>Velador(a)</td><td>179.08</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>60</td><td>Vendedor(a) de piso de aparatos de uso doméstico</td><td>183.78</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                            <tr><td>61</td><td>Zapatero(a) en talleres de reparación de calzado; oficial</td><td>181.24</td><td>0</td><td>0</td><td>260.34</td><td>08-Dic-2021</td></tr>
                        </tbody>
                    </table>
                    @elseif($indicator == "smf")
                    <h5 class="text-center mb-3">Salario Mínimo Federal EUA</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_date">De:</label>
                        <select class="form-control mx-2" id="start_date">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016" selected>2016</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_date">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th>Año</th><th>Salario por hora en USD</th></tr>
                        </tr>
                        <tbody>
                            <tr><td>2021</td><td>7.25</td></tr>
                            <tr><td>2020</td><td>7.25</td></tr>
                            <tr><td>2019</td><td>7.25</td></tr>
                            <tr><td>2018</td><td>7.25</td></tr>
                            <tr><td>2017</td><td>7.25</td></tr>
                            <tr><td>2016</td><td>7.25</td></tr>
                            <tr><td>2015</td><td>7.25</td></tr>
                            <tr><td>2014</td><td>7.25</td></tr>
                            <tr><td>2013</td><td>7.25</td></tr>
                            <tr><td>2012</td><td>7.25</td></tr>
                        </tbody>
                    </thead>
                    @elseif($indicator == "uma")
                    <h5 class="text-center mb-3">Unidad de Medida y Actualización</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_date">De:</label>
                        <select class="form-control mx-2" id="start_date">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016" selected>2016</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_date">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                        </select>
                        <button type="submit" class="btn btn-primary py-2">Buscar</button>
                    </form>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th>Mes</th><th>Diario</th><th>Mensual</th><th>Anual</th><th>Fecha de Publicación en DOF</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Ene-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Feb-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Mar-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Abr-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>May-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Jun-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Jul-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Ago-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Sep-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Oct-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Nov-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Dic-2016</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Ene-2017</td><td>73.04</td><td>2,220.42</td><td>26,645.99</td><td>1/28/2016</td></tr>
                            <tr><td>Feb-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Mar-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Abr-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>May-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Jun-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Jul-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Ago-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Sep-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Oct-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Nov-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Dic-2017</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Ene-2018</td><td>75.49</td><td>2,294.90</td><td>27,538.80</td><td>1/10/2017</td></tr>
                            <tr><td>Feb-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Mar-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Abr-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>May-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Jun-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Jul-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Ago-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Sep-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Oct-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Nov-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Dic-2018</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Ene-2019</td><td>80.6</td><td>2,450.24</td><td>29,402.88</td><td>1/10/2018</td></tr>
                            <tr><td>Feb-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Mar-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Abr-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>May-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Jun-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Jul-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Ago-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Sep-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Oct-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Nov-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Dic-2019</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Ene-2020</td><td>84.49</td><td>2,568.50</td><td>30,822</td><td>1/10/2019</td></tr>
                            <tr><td>Feb-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Mar-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Abr-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>May-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Jun-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Jul-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Ago-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Sep-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Oct-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Nov-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Dic-2020</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Ene-2021</td><td>86.88</td><td>2,641.15</td><td>31,693.80</td><td>1/10/2020</td></tr>
                            <tr><td>Feb-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Mar-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Abr-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>May-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Jun-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Jul-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Ago-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Sep-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Oct-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Nov-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Dic-2021</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Ene-2022</td><td>89.62</td><td>2,724.45</td><td>32,693.40</td><td>1/8/2021</td></tr>
                            <tr><td>Feb-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Mar-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Abr-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>May-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Jun-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Jul-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Ago-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Sep-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Oct-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Nov-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                            <tr><td>Dic-2022</td><td>96.22</td><td>2,925.09</td><td>35,101.08</td><td>1/10/2022</td></tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@section('scripts')
<script type="text/javascript">
    $.fn.extend({
    treed: function (o) {
      
      var openedClass = 'glyphicon-minus-sign';
      var closedClass = 'glyphicon-plus-sign';
      
      if (typeof o != 'undefined'){
        if (typeof o.openedClass != 'undefined'){
        openedClass = o.openedClass;
        }
        if (typeof o.closedClass != 'undefined'){
        closedClass = o.closedClass;
        }
      };
      
        //initialize each of the top levels
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            var branch = $(this); //li with children ul
            branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
            branch.addClass('branch');
            branch.on('click', function (e) {
                if (this == e.target) {
                    var icon = $(this).children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        //fire event from the dynamically added icon
      tree.find('.branch .indicator').each(function(){
        $(this).on('click', function () {
            $(this).closest('li').click();
        });
      });
        //fire event to open branch if the li contains an anchor instead of text
        tree.find('.branch>a').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        //fire event to open branch if the li contains a button instead of text
        tree.find('.branch>button').each(function () {
            $(this).on('click', function (e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
    }
});

//Initialization of treeviews

$('#tree1').treed();

$('#tree2').treed({openedClass:'ti-folder', closedClass:'ti-folder'});

$('#tree3').treed({openedClass:'glyphicon-chevron-right', closedClass:'glyphicon-chevron-down'});

window.addEventListener('show-chart', event => {
    Highcharts.getJSON(
        "{{ route('inpc') }}",
        function (data) {
            Highcharts.chart('container-'+event.detail.name, {
                exporting: {enabled:false},
                credits: {enabled:false},
                chart: {
                    backgroundColor: '#ffffff',
                    height: 350,
                    zoomType: 'x'
                },
                title: {text: event.detail.title},
                xAxis: {
                    visible: true,
                    type: 'date',
                    labels: {enabled: true}
                },
                yAxis: {
                    visible: true,
                    labels: {enabled: true},
                    title: {text: null}
                },
                legend: {enabled: false},
                plotOptions: {
                    area: {
                        marker: {radius: 2},
                        lineWidth: 1,
                        states: {hover: {lineWidth: 1}
                        },
                        threshold: null
                    }
                },
                series: [{
                    type: 'area',
                    name: 'Valor',
                    data: data,
                    color: '#c19500'
                }]
            })
        }
    )
})

</script>
@endsection