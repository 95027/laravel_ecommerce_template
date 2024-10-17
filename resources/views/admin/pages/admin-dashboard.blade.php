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
    <div class="flex flex-col md:flex-row gap-3">
        <div
            class="md:w-8/12 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <h1 class="font-bold text-2xl">Recent Orders</h1>
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
                    <tbody class="text-gray-600 text-md font-semibold">
                        <tr>
                            <td class="py-3">#1005</td>
                            <td class="py-3 px-6">
                                <div class="flex items-center">
                                    <img class="object-cover object-center w-10 h-10 rounded-full"
                                        src="https://picsum.photos/200" alt="User Image">
                                    <span class="ml-2 font-semibold">Product E</span>
                                </div>
                            </td>
                            <td class="py-3 px-2">4</td>
                            <td class="py-3 px-2">$50.00</td>
                            <td class="py-3 px-2">
                                <span
                                    class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Pending</span>
                            </td>
                            <td class="py-3 text-center flex justify-evenly">
                                <a class="p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                        class="fa-regular fa-eye hover:text-blue-600"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div
            class="md:w-4/12 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <div class="flex justify-between items-center">
                <h1 class="font-bold text-2xl">Top Selling Products</h1>
            </div>
            <table class="min-w-full table-auto bg-white">
                <tbody class="text-gray-600 text-md font-semibold">
                    <tr>
                        <td class="py-3">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2 font-semibold">Product E</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">$50.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2 font-semibold">Product E</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">$50.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2 font-semibold">Product E</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">$50.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Active</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2 font-semibold">Product E</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">$50.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Active</span>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>


    <div
        class="md:w-6/12 mt-6 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
        <div class="flex justify-between items-center px-6">
            <h1 class="font-bold text-2xl mb-4">Total Sale <span> <i
                        class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>
                    <span class="text-sm font-semibold text-gray-600">+30%</span></span></h1>
        </div>
        <div id="totalSale"></div>
    </div>
</div>
@endsection
