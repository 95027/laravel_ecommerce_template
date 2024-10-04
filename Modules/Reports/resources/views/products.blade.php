@extends('admin.layout.master')
@section('content')
    <div class="border w-full max-w-md mx-auto mt-10 py-6 bg-white shadow-md rounded-lg dark:bg-gray-800 relative">
        <!-- Chart Container -->
        <div id="chart"></div>
        <div class="absolute top-2 right-4">
            <select id="timeframe-select"
                data-hs-select='{
    "placeholder": "Fillter",
    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
    "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
  }'>
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
                <option value="yearly">Yearly</option>
            </select>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Sales data for different timeframes
        var salesData = {
            daily: [12, 15, 14, 18, 17, 16, 20], // Example data for Daily
            weekly: [120, 140, 160, 180, 200, 220, 240], // Example data for Weekly
            monthly: [800, 900, 950, 1000, 1100, 1150], // Example data for Monthly
            yearly: [9800, 10400, 11000, 11500, 12000] // Example data for Yearly
        };

        // Chart options
        var options = {
            series: [12, 15, 14], // Initial data for daily
            chart: {
                type: 'donut',
                width: '100%',
                height: 280,
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
                text: 'Daily Sales',
                align: 'center'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 250
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        // Render initial chart
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        // Update chart when the select option changes
        document.getElementById('timeframe-select').addEventListener('change', function(event) {
            var timeframe = event.target.value; // Get the selected value
            chart.updateSeries(salesData[timeframe]);

            // Update the chart title based on the selected timeframe
            var timeframeTitle = timeframe.charAt(0).toUpperCase() + timeframe.slice(1) + ' Sales';
            chart.updateOptions({
                title: {
                    text: timeframeTitle
                }
            });
        });
    </script>
@endsection
