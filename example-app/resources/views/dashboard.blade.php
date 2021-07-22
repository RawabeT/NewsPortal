<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

<div class="row d-flex justify-content-center">
<div class="col">
<div class="" style="width: 20rem;">
  <div class="card-body">
    <h1 class="card-title">Total News</h1>
    <i class="bi bi-book"></i>
    <h6 class="card-subtitle mb-2 text-muted">{{$articleCount}}</h6>
  </div>
</div>
</div>

<div class="col">
<h1>Number of Articles</h1>
    <div id="container"></div>
</div>
</div>

                </div>
            </div>
        </div>
    </div>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">

    Highcharts.chart('container', {
        title: {
            text: 'New Articles Growth, 2021'
        },
        subtitle: {
            text: 'Source: Articles.com'
        },
        xAxis: {
            categories: ['Arts', 'Desgin', 'Digitl', 'Computer', 'Games', 'Study']
        },
        yAxis: {
            title: {
                text: 'Number of New Articles'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'New Articles',
            data: [
                    {{$art_c}},
                    {{$design_c}}, 
                    {{$digitl_c}}
                ]
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });

</script>
</x-app-layout>
