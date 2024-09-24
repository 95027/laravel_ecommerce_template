@extends('admin.layout.master')

@section('content')
    <div class="container mx-auto mt-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mt-10 mb-8">
            <!-- First Chart: Sales -->
            <div class="border border-gray-200 rounded-xl dark:border-neutral-800 overflow-hidden shadow-md relative">
                <div id="spark1"></div>
                <!-- Icon with background inside the chart area -->
                <div class="absolute top-2 right-2 bg-blue-300 rounded-full p-1 flex justify-between items-center">
                    <i class='bx bx-shopping-bag text-3xl text-white'></i>
                </div>
            </div>
            <!-- Second Chart: Total Products -->
            <div class="border border-gray-200 rounded-xl dark:border-neutral-800 overflow-hidden shadow-md relative">
                <div id="spark2"></div>
                <div class="absolute top-2 right-2 bg-yellow-400 rounded-full p-1 flex justify-between items-center">
                    <i class='bx bx-package text-3xl text-white'></i>
                </div>
            </div>
            <!-- Third Chart: Total Revenue -->
            <div class="border border-gray-200 rounded-xl dark:border-neutral-800 overflow-hidden shadow-md relative">
                <div id="spark3"></div>
                <div class="absolute top-2 right-2 bg-red-500 rounded-full p-1 flex justify-between items-center">
                    <i class='bx bx-rupee text-3xl text-white'></i>
                </div>
            </div>
            <!-- Fourth Chart: Total Orders -->
            <div class="border border-gray-200 rounded-xl dark:border-neutral-800 overflow-hidden shadow-md relative">
                <div id="spark4"></div>
                <div class="absolute top-2 right-2 bg-indigo-600 rounded-full p-1 flex justify-between items-center">
                    <i class='bx bx-receipt text-3xl text-white'></i>
                </div>
            </div>
        </div>
        {{-- <div
            class="border border-gray-200 rounded-xl dark:border-neutral-800 overflow-hidden shadow-md h-60 w-72 mt-10">
            <div id="chart"></div>
        </div> --}}
        <div class="gap-3">
            <div
                class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto bg-white">
                        <thead>
                            <tr class="text-left text-gray-600 uppercase text-xs leading-normal">
                                <th class="py-3">Order No</th>
                                <th class="py-3 px-6">Name</th>
                                <th class="py-3">Quantity</th>
                                <th class="py-3">Total Price</th>
                                <th class="py-3">Status</th>
                                <th class="py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <tr>
                                <td class="py-3">1001</td>
                                <td class="py-3 px-6">
                                    <div class="flex items-center">
                                        <img class="object-cover object-center w-10 h-10 rounded-full"
                                            src="https://picsum.photos/200" alt="User Image">
                                        <span class="ml-2">Product A</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2">2</td>
                                <td class="py-3 px-2">$20.00</td>
                                <td class="py-3 px-2">
                                    <span
                                        class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Completed</span>
                                </td>
                                <td class="py-3 text-center flex justify-evenly">
                                    <a
                                        class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href="javascript:;"
                                        class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value=""> --}}
                                        <button type="button" {{-- onclick="confirmDelete('{{ $product->id }}', '{{ $product->name }}')" --}}
                                            class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">1002</td>
                                <td class="py-3 px-6">
                                    <div class="flex items-center">
                                        <img class="object-cover object-center w-10 h-10 rounded-full"
                                            src="https://picsum.photos/200" alt="User Image">
                                        <span class="ml-2">Product B</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2">1</td>
                                <td class="py-3 px-2">$15.00</td>
                                <td class="py-3 px-2">
                                    <span
                                        class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Pending</span>
                                </td>
                                <td class="py-3 text-center flex justify-evenly">
                                    <a
                                        class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href="javascript:;"
                                        class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value=""> --}}
                                        <button type="button" {{-- onclick="confirmDelete('{{ $product->id }}', '{{ $product->name }}')" --}}
                                            class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">1003</td>
                                <td class="py-3 px-6">
                                    <div class="flex items-center">
                                        <img class="object-cover object-center w-10 h-10 rounded-full"
                                            src="https://picsum.photos/200" alt="User Image">
                                        <span class="ml-2">Product C</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2">5</td>
                                <td class="py-3 px-2">$75.00</td>
                                <td class="py-3 px-2">
                                    <span
                                        class="rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Cancelled</span>
                                </td>
                                <td class="py-3 text-center flex justify-evenly">
                                    <a
                                        class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href="javascript:;"
                                        class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value=""> --}}
                                        <button type="button" {{-- onclick="confirmDelete('{{ $product->id }}', '{{ $product->name }}')" --}}
                                            class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">1004</td>
                                <td class="py-3 px-6">
                                    <div class="flex items-center">
                                        <img class="object-cover object-center w-10 h-10 rounded-full"
                                            src="https://picsum.photos/200" alt="User Image">
                                        <span class="ml-2">Product D</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2">3</td>
                                <td class="py-3 px-2">$30.00</td>
                                <td class="py-3 px-2">
                                    <span
                                        class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Completed</span>
                                </td>
                                <td class="py-3 text-center flex justify-evenly">
                                    <a
                                        class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href="javascript:;"
                                        class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value=""> --}}
                                        <button type="button" {{-- onclick="confirmDelete('{{ $product->id }}', '{{ $product->name }}')" --}}
                                            class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3">1005</td>
                                <td class="py-3 px-6">
                                    <div class="flex items-center">
                                        <img class="object-cover object-center w-10 h-10 rounded-full"
                                            src="https://picsum.photos/200" alt="User Image">
                                        <span class="ml-2">Product E</span>
                                    </div>
                                </td>
                                <td class="py-3 px-2">4</td>
                                <td class="py-3 px-2">$50.00</td>
                                <td class="py-3 px-2">
                                    <span
                                        class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Pending</span>
                                </td>
                                <td class="py-3 text-center flex justify-evenly">
                                    <a
                                        class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                            class="fa-regular fa-eye"></i></a>
                                    <a href="javascript:;"
                                        class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <input type="hidden" name="id" value=""> --}}
                                        <button type="button" {{-- onclick="confirmDelete('{{ $product->id }}', '{{ $product->name }}')" --}}
                                            class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        var randomizeArray = function(arg) {
            var array = arg.slice();
            var currentIndex = array.length,
                temporaryValue, randomIndex;

            while (0 !== currentIndex) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }

            return array;
        }

        var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19,
            46
        ];
        var colorPalette = ['#00D8B6', '#008FFB', '#FEB019', '#FF4560', '#775DD0'];

        // First Sparkline Chart (Sales)
        var spark1 = {
            chart: {
                id: 'sparkline1',
                group: 'sparklines',
                type: 'area',
                height: 160,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1
            },
            series: [{
                name: 'Sales',
                data: randomizeArray(sparklineData)
            }],
            labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
            yaxis: {
                min: 0
            },
            xaxis: {
                type: 'datetime'
            },
            colors: ['#008FFB'],
            title: {
                text: '$424,652',
                offsetX: 30,
                style: {
                    fontSize: '24px',
                }
            },
            subtitle: {
                text: 'Sales',
                offsetX: 30,
                style: {
                    fontSize: '14px'
                }
            }
        };

        // Second Sparkline Chart (Total Products)
        var spark2 = {
            chart: {
                id: 'sparkline2',
                group: 'sparklines',
                type: 'area',
                height: 160,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1
            },
            series: [{
                name: 'Products',
                data: randomizeArray(sparklineData)
            }],
            labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
            yaxis: {
                min: 0
            },
            xaxis: {
                type: 'datetime'
            },
            colors: ['#FEB019'],
            title: {
                text: '12,234',
                offsetX: 30,
                style: {
                    fontSize: '24px'
                }
            },
            subtitle: {
                text: 'Products',
                offsetX: 30,
                style: {
                    fontSize: '14px'
                }
            }
        };

        // Third Sparkline Chart (Total Revenue)
        var spark3 = {
            chart: {
                id: 'sparkline3',
                group: 'sparklines',
                type: 'area',
                height: 160,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1
            },
            series: [{
                name: 'Revenue',
                data: randomizeArray(sparklineData)
            }],
            labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
            yaxis: {
                min: 0
            },
            xaxis: {
                type: 'datetime'
            },
            colors: ['#FF4560'],
            title: {
                text: '$932,150',
                offsetX: 30,
                style: {
                    fontSize: '24px'
                }
            },
            subtitle: {
                text: 'Revenue',
                offsetX: 30,
                style: {
                    fontSize: '14px'
                }
            }
        };

        // Fourth Sparkline Chart (Total Orders)
        var spark4 = {
            chart: {
                id: 'sparkline4',
                group: 'sparklines',
                type: 'area',
                height: 160,
                sparkline: {
                    enabled: true
                },
            },
            stroke: {
                curve: 'straight'
            },
            fill: {
                opacity: 1
            },
            series: [{
                name: 'Orders',
                data: randomizeArray(sparklineData)
            }],
            labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
            yaxis: {
                min: 0
            },
            xaxis: {
                type: 'datetime'
            },
            colors: ['#775DD0'],
            title: {
                text: '1,530',
                offsetX: 30,
                style: {
                    fontSize: '24px'
                }
            },
            subtitle: {
                text: 'Orders',
                offsetX: 30,
                style: {
                    fontSize: '14px'
                }
            }
        };

        var options = {
            series: [44, 55, 13, 43, 22],
            chart: {
                width: 380,
                type: 'pie',
            },
            labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
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

        var chart = new ApexCharts(document.querySelector("#chart"), options).render();


        // Render the charts
        new ApexCharts(document.querySelector("#spark1"), spark1).render();
        new ApexCharts(document.querySelector("#spark2"), spark2).render();
        new ApexCharts(document.querySelector("#spark3"), spark3).render();
        new ApexCharts(document.querySelector("#spark4"), spark4).render();
    </script>
@endsection
