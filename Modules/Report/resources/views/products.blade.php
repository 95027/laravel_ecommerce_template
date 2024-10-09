@extends('admin.layout.master')
@section('content')
    <div class="mt-3">
        <h4>Products Reports</h4>
        <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
                <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="{{ route('admin.dashboard') }}">
                    Home
                </a>
                <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="10" height="10"
                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                </svg>
            </li>
            <li class="inline-flex items-center text-xs font-semibold text-blue-600 truncate dark:text-neutral-200"
                aria-current="page">
                Products Reports
            </li>
        </ol>
    </div>

    <div class="flex flex-col md:flex-row gap-3">
        <div
            class="md:w-8/12 mt-6 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <div class="flex justify-between items-center px-6">
                <h1 class="font-bold text-2xl">Products Sales</h1>
                <select id="timeframe" onchange="updateChart(this.value)"
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
            <h1 class="text-xl font-bold text-gray-800 mb-4">Top Products by Sales</h1>
            <div class="text-3xl font-semibold text-gray-800 mb-2">$37,802</div>
            <div class="text-sm text-green-500 font-medium"><i class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>+1.56% since last week</div>

            <div class="mt-6">
                <div class="grid grid-cols-3 gap-4 border-b pb-3 items-center justify-between">
                    <span class="flex items-center">
                        <img class="h-10 w-10 mr-2 rounded-full" src="https://picsum.photos/200/300?grayscale" alt="Turkey">
                        Product A
                    </span>
                    <span class="text-gray-700">$6,972</span>
                    <span class="text-green-500 text-sm flex items-center">
                        <i class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>
                        +5%
                    </span>
                </div>

                <div class="grid grid-cols-3 gap-4 border-b pb-3 mt-3">
                    <span class="flex items-center">
                        <img class="h-10 w-10 mr-2 rounded-full" src="https://picsum.photos/200/300?grayscale" alt="Belgium">
                        Product B
                    </span>
                    <span class="text-gray-700">$6,972</span>
                    <span class="text-red-500 text-sm flex items-center">
                        <i class="fa-solid fa-arrow-trend-down text-red-500 me-2"></i>
                        -2%
                    </span>
                </div>

                <!-- Repeat for more products -->
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        // Sample data for different periods for multiple products
        var products = ['Product A', 'Product B', 'Product C'];

        var dailyData = [
            [10, 12, 8, 15, 18, 13, 20], // Product A
            [9, 14, 11, 13, 19, 17, 21], // Product B
            [5, 8, 10, 7, 6, 9, 11] // Product C
        ];

        var weeklyData = [
            [50, 70, 60, 90, 100, 85], // Product A
            [40, 60, 70, 80, 90, 100], // Product B
            [30, 50, 40, 70, 60, 80] // Product C
        ];

        var monthlyData = [
            [500, 700, 800, 600, 900, 1000, 850, 780, 950, 1020, 1100, 1200], // Product A
            [450, 650, 700, 550, 900, 950, 800, 900, 1100, 1200, 1300], // Product B
            [300, 500, 600, 400, 700, 800, 600, 700, 900, 1000, 1200] // Product C
        ];

        var yearlyData = [
            [10000, 15000, 20000, 25000, 18000, 22000, 27000], // Product A
            [9000, 13000, 19000, 24000, 17000, 21000, 26000], // Product B
            [7000, 10000, 15000, 20000, 16000, 18000, 24000] // Product C
        ];

        var options = {
            series: [{
                    name: products[0], // Default to Product A
                    data: monthlyData[0] // Default to monthly data for Product A
                },
                {
                    name: products[1],
                    data: monthlyData[1]
                },
                {
                    name: products[2],
                    data: monthlyData[2]
                }
            ],
            chart: {
                height: 350,
                type: 'bar',
                stacked: true,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    dataLabels: {
                        position: 'top',
                    },
                }
            },
            dataLabels: {
                enabled: false,
                formatter: function(val) {
                    return val + " Sales";
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
            },
            yaxis: {
                labels: {
                    show: true,
                    formatter: function(val) {
                        return val + " Sales";
                    }
                }
            },
            title: {
                // text: 'Monthly Product Sales',
                floating: true,
                offsetY: 330,
                align: 'center',
                style: {
                    color: '#444'
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        // Update chart function
        function updateChart(filter) {
            let newData = [];
            let newCategories;
            let newTitle;

            if (filter === 'daily') {
                newData = dailyData;
                newCategories = ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'];
                // newTitle = 'Daily Product Sales';
            } else if (filter === 'weekly') {
                newData = weeklyData;
                newCategories = ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5', 'Week 6'];
                // newTitle = 'Weekly Product Sales';
            } else if (filter === 'monthly') {
                newData = monthlyData;
                newCategories = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                // newTitle = 'Monthly Product Sales';
            } else if (filter === 'yearly') {
                newData = yearlyData;
                newCategories = ['2018', '2019', '2020', '2021', '2022', '2023', '2024']; // Example years
                // newTitle = 'Yearly Product Sales';
            }

            chart.updateOptions({
                series: newData.map((data, index) => ({
                    name: products[index],
                    data: data
                })),
                xaxis: {
                    categories: newCategories
                },
                title: {
                    text: newTitle
                }
            });
        }
    </script>
@endsection
