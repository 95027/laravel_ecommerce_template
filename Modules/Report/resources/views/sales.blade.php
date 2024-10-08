@extends('admin.layout.master')
@section('content')
    <div class="border w-96 mt-10 py-6">
        <div id="chart"></div>
        <div class="items-center text-center mt-2">
            <button id="daily-btn"
                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                Daily
            </button>
            <button id="weekly-btn"
                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-100 text-teal-800 hover:bg-teal-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                Weekly
            </button>
            <button id="yearly-btn"
                class="py-1 px-1 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-yellow-100 text-yellow-800 hover:bg-yellow-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                Yearly
            </button>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var options = {
            series: [44, 55, 41], // Default series for 'Daily'
            chart: {
                width: 380,
                type: 'donut',
            },
            plotOptions: {
                pie: {
                    startAngle: -90,
                    endAngle: 270
                }
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'gradient',
            },
            legend: {
                formatter: function(val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex] + " Sales";
                }
            },
            title: {
                text: 'Sales Chart (Daily)'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        // Initialize the chart
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        // Define the data for Daily, Weekly, and Yearly sales
        var salesData = {
            daily: [44, 55, 41], // Sales for 'Daily'
            weekly: [150, 200, 170], // Sales for 'Weekly'
            yearly: [1800, 2300, 2000] // Sales for 'Yearly'
        };

        // Add event listeners to the buttons to update the chart
        document.getElementById('daily-btn').addEventListener('click', function() {
            chart.updateSeries(salesData.daily);
            chart.updateOptions({
                title: {
                    text: 'Sales Chart (Daily)'
                }
            });
        });

        document.getElementById('weekly-btn').addEventListener('click', function() {
            chart.updateSeries(salesData.weekly);
            chart.updateOptions({
                title: {
                    text: 'Sales Chart (Weekly)'
                }
            });
        });

        document.getElementById('yearly-btn').addEventListener('click', function() {
            chart.updateSeries(salesData.yearly);
            chart.updateOptions({
                title: {
                    text: 'Sales Chart (Yearly)'
                }
            });
        });
    </script>
@endsection
