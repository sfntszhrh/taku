
@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<figure class="highcharts-figure">
    <div id="chartContainer"></div>
    <script>
        Highcharts.chart('chartContainer', {
            chart: {
                type: 'line',
            },
            title: {
                text: 'Visitors Chart'
            },
            subtitle: {
                text: 'Visit Information',
                align: 'center',
                verticalAlign: 'bottom'
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 60,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
            },
            xAxis: { 
                //data dummy
                categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni']
            },
            yAxis: {
                title: {
                    text: 'Visit*'
                }
            },
            plotOptions: {
                area: {
                    fillOpacity: 0.2
                }
            },
            credits: {
                enabled: false 
            },
            series: [{
                name: 'Wisata',
                data: [1, 5, 10, 30, 40, 50]
            },{
                name: 'Hotel',
                data: [30, 50, 10, 40, 20, 70]
            },{ 
                name: 'Tempat Belanja',
                data: [20, 50, 10, 40, 25, 30]  
            },{
                name: 'Kuliner',
                data: [5, 15, 30, 40, 50, 80]
            }]
        });        
    </script>
</figure>
@endsection