@extends('dashboard')
@section('content')


    <h1>Number of Articles</h1>
    <div id="container"></div>


<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var articleData = <?php echo json_encode($articleData)?>;

    Highcharts.chart('container', {
        title: {
            text: 'New Articles Growth, 2021'
        },
        subtitle: {
            text: 'Source: Articles.com'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
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
            data: articleData
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
@endsection