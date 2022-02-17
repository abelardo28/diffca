@section('title', 'Indicadores')

@section('styles')
<style type="text/css">
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
                <div class="col-md-8 col-12">
                    @if($indicator == "inpc")
                    <h5 class="text-center mb-3">Índice Nacional de Precios al Consumidor</h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr><th></th><th>2017</th><th>2018</th><th>2019</th><th>2020</th><th>2021</th><th>2022</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Ene</td><td>93.604</td><td>98.795</td><td>103.103</td><td>106.447</td><td>110.210</td><td>118.002</td></tr>
                            <tr><td>Feb</td><td>94.145</td><td>99.171</td><td>103.079</td><td>106.889</td><td>110.907</td><td>0</td></tr>
                            <tr><td>Mar</td><td>94.722</td><td>99.492</td><td>103.476</td><td>106.838</td><td>111.824</td><td>0</td></tr>
                            <tr><td>Abr</td><td>94.839</td><td>99.155</td><td>103.531</td><td>105.755</td><td>112.190</td><td>0</td></tr>
                            <tr><td>May</td><td>94.725</td><td>98.994</td><td>103.233</td><td>106.162</td><td>112.419</td><td>0</td></tr>
                            <tr><td>Jun</td><td>94.964</td><td>99.376</td><td>103.299</td><td>106.743</td><td>113.018</td><td>0</td></tr>
                            <tr><td>Jul</td><td>95.323</td><td>99.909</td><td>103.687</td><td>107.444</td><td>113.682</td><td>0</td></tr>
                            <tr><td>Ago</td><td>95.794</td><td>100.492</td><td>103.670</td><td>107.867</td><td>113.899</td><td>0</td></tr>
                            <tr><td>Sep</td><td>96.094</td><td>100.917</td><td>103.942</td><td>108.114</td><td>114.601</td><td>0</td></tr>
                            <tr><td>Oct</td><td>96.698</td><td>101.440</td><td>104.503</td><td>108.774</td><td>115.561</td><td>0</td></tr>
                            <tr><td>Nov</td><td>97.695</td><td>102.303</td><td>105.346</td><td>108.856</td><td>116.884</td><td>0</td></tr>
                            <tr><td>Dic</td><td>98.273</td><td>103.020</td><td>105.934</td><td>109.271</td><td>117.308</td><td>0</td></tr>
                        </tbody>
                    </table>
                    @elseif($indicator == "cpiu")
                    <h5 class="text-center mb-3">Índice de Inflación de EUA</h5>
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

                    @elseif($indicator == "smp")

                    @elseif($indicator == "uma")

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

</script>
@endsection