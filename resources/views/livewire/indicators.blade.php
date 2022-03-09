@section('title', 'Indicadores')

@section('styles')
<style type="text/css">
    .form-inline .form-control {
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

    <section class="section pb-0">
        <div wire:ignore class="container">
            <div class="row align-items-center">
                <div class="col-sm-6 col-xl-6 mb-xl-2 mb-lg-1 mb-1 text-center text-sm-left">
                    <h4 class="mb-xl-2 mb-lg-2 mb-2">Tipo de Cambio</h4>
                    <small class="text-secondary">Valor: </small><span class="font-weight-bold" id="last-value-tipo-cambio">0</span>
                    <span class="float-right"><small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-tipo-cambio">0</span></span>
                    <figure class="highcharts-figure">
                        <div id="container-tipo-cambio"></div>
                    </figure>
                </div>
                <div class="col-sm-6 col-xl-6 mb-xl-2 mb-lg-1 mb-1 text-center text-sm-left">
                    <h4 class="mb-xl-2 mb-lg-2 mb-2">INPC</h4>
                    <small class="text-secondary">Valor: </small><span class="font-weight-bold" id="last-value-inpc">0</span>
                    <span class="float-right"><small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-inpc">0</span></span>
                    <figure class="highcharts-figure">
                        <div id="container-inpc"></div>
                    </figure>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-3 col-xl-3 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                    <h4 class="mb-xl-2 mb-lg-2 mb-2">UDIS</h4>
                    <small class="text-secondary">Valor:</small>
                    <h2 class="text-primary" id="value-udis"> 0</h2>
                    <small class="text-secondary">Act. </small><span class="font-weight-bold" id="date-udis">0</span>
                </div>
                <div class="col-sm-3 col-xl-3 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                    <h4 class="mb-xl-2 mb-lg-2 mb-2">TIIE</h4>
                    <small class="text-secondary">Valor:</small>
                    <h2 class="text-primary" id="value-tiie"> 0</h2>
                    <small class="text-secondary">Act. </small><span class="font-weight-bold" id="date-tiie">0</span>
                </div>
                @foreach($values as $value)
                <div class="col-sm-3 col-xl-3 mb-xl-4 mb-lg-2 mb-2 text-center text-sm-left">
                    <h4 class="mb-xl-2 mb-lg-2 mb-2">{{ $value->name }}</h4>
                    <small class="text-secondary">Valor:</small>
                    <h2 class="text-primary"> {{ $value->value }}{{ $value->symbol }}</h2>
                    <small class="text-secondary">Act. </small><span class="font-weight-bold" id="last-date-tipo-cambio">{{ date_format(date_create($value->updated_date), 'd/m/Y') }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div wire:ignore class="col-md-12 col-12">
                    <ul id="tree2">
                        @foreach($indicators as $indicator)
                        <li class="title">{{ $indicator->name }}
                            <ul>
                                @foreach($indicator->subindicators as $sub)
                                <li class="subtitle" wire:click.prevent="showSubindicator({{ $sub->id }})">{{ $sub->name }}</li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div id="info"></div>
            <br><br><br><br><br>
            <div class="row d-flex justify-content-center content-subindicator">
                <div class="col-md-12 col-12">
                    @if($subindicator)
                    <h5 class="text-center mb-3">{{ $subindicator->name }}</h5>
                    <form class="form-inline d-flex justify-content-center my-4">
                        <label for="start_month">Del:</label>
                        <select class="form-control mx-2" id="start_year">
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017" selected>2017</option>
                        </select>
                        <label for="end_date">Al:</label>
                        <select class="form-control mx-2" id="end_year">
                            <option value="2022" selected>2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                        <button type="button" wire:click="$emit('filter')" class="btn btn-primary py-2 mr-2">Buscar</button>
                        <button type="button" wire:click="showSubindicator({{ $subindicator->id}})" class="btn btn-primary py-2">Resetear</button>
                    </form>
                    {!! $subindicator->data !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>

@section('scripts')
<script type="text/javascript">
    Livewire.on('filter', event => {
        var min = $('#start_year').val();
        var max = $('#end_year').val();
        $('.table tbody tr td').filter(function(){
            return $(this).data('header') < min || $(this).data('header') > max && $(this).data('header') == "";
        }).hide();
        $('.table thead tr th').filter(function(){
            return $(this).html() < min || $(this).html() > max && $(this).html() == "";
        }).hide();
    })

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

    $(function(){
        var current_date = moment().format('YYYY-MM-DD');
        var last_date = moment().subtract(90, 'days').format('YYYY-MM-DD');
        var options = {
            exporting: {enabled:false},
            credits: {enabled:false},
            chart: {
                renderTo: 'container-tipo-cambio',
                backgroundColor: '#ffffff',
                height: 150,
                zoomType: 'x'
            },
            title: {text: ''},
            xAxis: {
                visible: false,
                type: 'datetime',
                labels: {enabled: false}
            },
            yAxis: {
                visible: false,
                labels: {enabled: false},
                title: {text: null}
            },
            legend: {enabled: false},
            plotOptions: {
                area: {
                    marker: {radius: 2},
                    lineWidth: 1,
                    states: {hover: {lineWidth: 1}},
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: 'Valor',
                color: '#c19500'
            }]
        };
        var url = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF63528/datos/'+last_date+'/'+current_date+'?token={{ env('API_BANXICO_TOKEN') }}';
        $.getJSON(url,  function(response) {
            var data = response.bmx.series[0].datos;
            var obj = {};
            Object.keys(data).forEach(function (key) {
                obj[data[key].fecha] = parseFloat(data[key].dato)
            })
            serie = Object.entries(obj);
            options.series[0].data = serie;
            var chart = new Highcharts.Chart(options);
            $('#last-date-tipo-cambio').html(serie.at(-1)[0])
            $('#last-value-tipo-cambio').html(serie.at(-1)[1])
        });
    });
    $(function(){
        var current_date = moment().format('YYYY-MM-DD');
        var last_date = moment().subtract(960, 'days').format('YYYY-MM-DD');
        var options = {
            exporting: {enabled:false},
            credits: {enabled:false},
            chart: {
                renderTo: 'container-inpc',
                backgroundColor: '#ffffff',
                height: 150,
                zoomType: 'x'
            },
            title: {text: ''},
            xAxis: {
                visible: false,
                type: 'datetime',
                labels: {enabled: false}
            },
            yAxis: {
                visible: false,
                labels: {enabled: false},
                title: {text: null}
            },
            legend: {enabled: false},
            plotOptions: {
                area: {
                    marker: {radius: 2},
                    lineWidth: 1,
                    states: {hover: {lineWidth: 1}},
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: 'Valor',
                color: '#c19500'
            }]
        };
        var url = 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SP1/datos/'+last_date+'/'+current_date+'?token={{ env('API_BANXICO_TOKEN') }}';
        $.getJSON(url,  function(response) {
            var data = response.bmx.series[0].datos;
            var obj = {};
            Object.keys(data).forEach(function (key) {
                obj[data[key].fecha] = parseFloat(data[key].dato)
            })
            serie = Object.entries(obj);
            options.series[0].data = serie;
            var chart = new Highcharts.Chart(options);
            $('#last-date-inpc').html(serie.at(-1)[0])
            $('#last-value-inpc').html(serie.at(-1)[1])
        });
    });
    $(function(){
        $.ajax({
            url: 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SP68257/datos/oportuno?token={{ env('API_BANXICO_TOKEN') }}',
            jsonp: 'callback',
            dataType: 'jsonp',
            success: function(response) {
                var serie = response.bmx.series[0].datos[0];
                $("#value-udis").html(serie.dato);
                $("#date-udis").html(serie.fecha);
            }
        });
    });
    $(function(){
        $.ajax({
            url: 'https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43783/datos/oportuno?token={{ env('API_BANXICO_TOKEN') }}',
            jsonp: 'callback',
            dataType: 'jsonp',
            success: function(response) {
                var serie = response.bmx.series[0].datos[0];
                $("#value-tiie").html(serie.dato);
                $("#date-tiie").html(serie.fecha);
            }
        });
    });
</script>
@endsection