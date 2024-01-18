@extends('layouts.app')

@section('content')
    <script src="{{ asset('accessibility.js') }}"></script>
    <script src="{{ asset('export-data.js') }}"></script>
    <script src="{{ asset('highcharts.js') }}"></script>
    <script src="{{ asset('exporting.js') }}"></script>
    <div class="container row row-cols-1 row-cols-md-2 g-4">
        <div class="col col-md-8">
            <div class="card">
                <div class="" id="chartjemaat"></div>
            </div>
        </div>
        <div class="col col-md-4">
            <div class="col-12">
                <div class="card col-6 text-white bg-primary col">
                    <div class="card-header ">Jumlah Jemaat Aktif</div>
                    <div class="card-body text-center">
                        <h1>{{ $jumlahJemaat }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-12" style="margin-top: 38%">
                <div class="card col-6 text-white bg-primary col-4">
                    <div class="card-header">Jumlah Wilayah Rayon Aktif</div>
                    <div class="card-body text-center">
                        <h1>{{ $jumlahWilayah }}</h1>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <script>
        let dataChart = @json($chartJemaat);
        // console.log(data);
        document.addEventListener('DOMContentLoaded', function() {
            const chart = // Data retrieved from https://netmarketshare.com
                Highcharts.chart('chartjemaat', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Chart Data Jemaat',
                        align: 'center',
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.y}</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                            }
                        }
                    },
                    series: [{
                        name: 'Jumlah',
                        colorByPoint: true,
                        data: dataChart
                    }],
                    exporting: {
                        enabled: false
                    },
                    credits: {
                        enabled: false
                    }
                });

        });
    </script>
@endsection
