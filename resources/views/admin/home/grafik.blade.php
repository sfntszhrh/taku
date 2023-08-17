@section('chart')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <figure class="highcharts-figure">
        <div id="chartContainer"></div>
        <script>
            let datas = {!! $data !!}
            console.log(datas);
            Highcharts.chart('chartContainer', {
                chart: {
                    type: 'pie',
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
                    categories: datas.map((item, key) => {
                        return item.name
                    })
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
                    data: datas.map(item => {
                        return parseInt(item.viewers)
                    })
                }, {
                    name: 'Realisasi',
                    data: datas.map(item => {
                        return parseInt(item.viewers)
                    })
                }]
            });
        </script>
    </figure>
@endsection
