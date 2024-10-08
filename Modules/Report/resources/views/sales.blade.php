@extends('admin.layout.master')
@section('content')
    <div class="flex flex-col md:flex-row gap-3">
        <div
            class="md:w-8/12 mt-6 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <div class="flex justify-between items-center px-6">
                <h1 class="font-bold text-2xl">Total Sales</h1>
                <select id="timeRange"
                    data-hs-select='{
                "placeholder": "Fillter by category",
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
            <div id="chart"></div>
        </div>

        <div
            class="md:w-4/12 mt-6 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <div class="flex justify-between items-center">
                <h2 class="font-bold text-2xl">Sales Overview</h2>
                <a href="#" class="text-blue-500 text-sm">View all</a>
            </div>
            <!-- Total Sales -->
            <div class="mt-4">
                <h3 class="text-3xl font-bold">$37,802</h3>
                <div class="flex items-center text-sm text-green-500 mt-1">
                    <i class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>
                    <span class="ml-1">1.56%</span>
                    <span class="text-gray-500 ml-2">since last weekend</span>
                </div>
            </div>

            <!-- Current Month Sales -->
            <div class="mt-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="text-sm font-semibold">Current Month Sales</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>
                        <span class="ml-2 font-semibold">$12,500</span>
                    </div>
                </div>
            </div>

            <!-- Current Year Sales -->
            <div class="mt-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="text-sm font-semibold">Current Year Sales</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>
                        <span class="ml-2 font-semibold">$150,000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var dailyData = [100, 150, 130, 120, 200, 170, 190];
        var weeklyData = [700, 650, 800, 900];
        var monthlyData = [3000, 4500, 3700, 4200, 3900, 4600, 4700, 5000, 5300, 5200, 5100, 6000]; 
        var yearlyData = [38000, 42000, 40000, 45000, 48000];

        var dailyCategories = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        var weeklyCategories = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
        var monthlyCategories = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        ];
        var yearlyCategories = ['2020', '2021', '2022', '2023', '2024'];

        var options = {
            series: [{
                name: 'Sales',
                data: dailyData
            }],
            chart: {
                height: 350,
                type: 'bar',
                toolbar: {
                    show: false,
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: '50%',
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 0
            },
            grid: {
                row: {
                    colors: ['#fff', '#f2f2f2']
                }
            },
            xaxis: {
                categories: dailyCategories,
                tickPlacement: 'on'
            },
            yaxis: {
                title: {
                    text: 'Total Sales'
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    type: "horizontal",
                    shadeIntensity: 0.25,
                    gradientToColors: undefined,
                    inverseColors: true,
                    opacityFrom: 0.85,
                    opacityTo: 0.85,
                    stops: [50, 0, 100]
                },
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        document.getElementById("timeRange").addEventListener("change", function(e) {
            var selectedValue = e.target.value;

            if (selectedValue === 'daily') {
                chart.updateOptions({
                    series: [{
                        data: dailyData
                    }],
                    xaxis: {
                        categories: dailyCategories
                    }
                });
            } else if (selectedValue === 'weekly') {
                chart.updateOptions({
                    series: [{
                        data: weeklyData
                    }],
                    xaxis: {
                        categories: weeklyCategories
                    }
                });
            } else if (selectedValue === 'monthly') {
                chart.updateOptions({
                    series: [{
                        data: monthlyData
                    }],
                    xaxis: {
                        categories: monthlyCategories
                    }
                });
            } else if (selectedValue === 'yearly') {
                chart.updateOptions({
                    series: [{
                        data: yearlyData
                    }],
                    xaxis: {
                        categories: yearlyCategories
                    }
                });
            }
        });
    </script>
@endsection
