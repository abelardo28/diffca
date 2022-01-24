//Chart tipo de cambio
Highcharts.getJSON(
    "{{ route('tipo-cambio') }}",
    function (data) {
        Highcharts.chart('container-tipo-cambio', {
            exporting: {enabled:false},
            credits: {enabled:false},
            chart: {
                height: 200,
                zoomType: 'x'
            },
            title: {
                text: ''
            },
            xAxis: {
                type: 'datetime',
                labels: {
                    enabled: false
                }
            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: 'Valor',
                data: data
            }]
        });
    }
);

//Chart inpc
Highcharts.getJSON(
    "{{ route('inpc') }}",
    function (data) {
        Highcharts.chart('container-inpc', {
            exporting: {enabled:false},
            credits: {enabled:false},
            chart: {
                height: 200,
                zoomType: 'x'
            },
            title: {
                text: ''
            },
            xAxis: {
                type: 'datetime',
                labels: {
                    enabled: false
                }
            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },
            series: [{
                type: 'area',
                name: 'Valor',
                data: data
            }]
        });
    }
);