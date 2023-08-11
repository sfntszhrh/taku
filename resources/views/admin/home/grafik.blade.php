
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
                type: 'area',
            },
            title: {
                text: 'Pengunjung'
            },
            subtitle: {
                text: 'tanggal Kunjungan',
                align: 'center',
                verticalAlign: 'bottom'
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                borderWidth: 1,
                backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
            },
            xAxis: {
                categories: ['nama', 'tanggal', 'bulan', 'tahun', '2002', '2028']
            },
            yAxis: {
                title: {
                    text: 'Pendapatan'
                }
            },
            plotOptions: {
                area: {
                    fillOpacity: 0.5
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Target',
                data: [1, 5, 10, 30]
            },{
                name: 'Realisasi',
                data: [30, 50, 10, 40]
            }]
        });        
    </script>
</figure>
@endsection