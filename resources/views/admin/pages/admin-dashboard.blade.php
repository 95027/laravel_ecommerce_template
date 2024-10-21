@extends('admin.layout.master')

@section('content')
    <div class="container p-0 mx-auto mt-3">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3 mt-10 mb-8">
            <div
                class="card card-body bg-white p-4 shadow-sm transform transition-transform duration-300 hover:-translate-y-1 border-2 border-slate-100 rounded-lg">
                <article class="flex">
                    <span class="w-12 h-12 bg-green-200 rounded-full flex justify-center items-center mr-4">
                        <i class='bx bx-dollar material-icons text-2xl'></i>
                    </span>

                    <div class="text">
                        <h6 class="mb-1 font-medium">Revenue</h6>
                        <span class="font-bold text-2xl">$13,456.5</span><br>
                        <span class="text-xs"> Shipping fees are not included </span>
                    </div>
                </article>
            </div>
            <div
                class="card card-body bg-white p-4 shadow-sm transform transition-transform duration-300 hover:-translate-y-1 border-2 border-slate-100 rounded-lg">
                <article class="flex">
                    <span class="w-12 h-12 bg-blue-200 rounded-full flex justify-center items-center mr-4">
                        <i class='bx bxs-truck text-2xl'></i>
                    </span>

                    <div class="text">
                        <h6 class="mb-1 font-medium">Orders</h6>
                        <span class="font-bold text-2xl">53.668</span><br>
                        <span class="text-xs">Excluding orders in transit </span>
                    </div>
                </article>
            </div>
            <div
                class="card card-body bg-white p-4 shadow-sm transform transition-transform duration-300 hover:-translate-y-1 border-2 border-slate-100 rounded-lg">
                <article class="flex">
                    <span class="w-12 h-12 bg-yellow-200 rounded-full flex justify-center items-center mr-4">
                        <i class='bx bx-qr text-2xl'></i>
                    </span>

                    <div class="text">
                        <h6 class="mb-1 font-medium">Products</h6>
                        <span class="font-bold text-2xl">9.856</span><br>
                        <span class="text-xs">In 19 Categories</span>
                    </div>
                </article>
            </div>
            <div
                class="card card-body bg-white p-4 shadow-sm transform transition-transform duration-300 hover:-translate-y-1 border-2 border-slate-100 rounded-lg">
                <article class="flex">
                    <span class="w-12 h-12 bg-red-200 rounded-full flex justify-center items-center mr-4">
                        <i class='bx bxs-shopping-bag text-2xl'></i>
                    </span>

                    <div class="text">
                        <h6 class="mb-1 font-medium">Revenue</h6>
                        <span class="font-bold text-2xl">$6,982</span><br>
                        <span class="text-xs">Based in your local time.</span>
                    </div>
                </article>
            </div>
        </div>
        <div
            class="md:w-6/12 shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 transform transition-transform duration-300 hover:-translate-y-1">
            <div class="flex justify-between items-center px-6">
                <h1 class="font-bold text-2xl mb-4">Total Sale <span> <i
                            class="fa-solid fa-arrow-trend-up text-green-500 me-2"></i>
                        <span class="text-sm font-semibold text-gray-600">+30%</span></span></h1>
            </div>
            <div id="totalSale"></div>
        </div>

        <div class="card mt-6 bg-white shadow-lg rounded-lg">
            <div class="card-body p-4">
                <div class="table-responsive overflow-x-auto">
                    <table class="min-w-full table-auto border-collapse">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col" class="text-center p-3">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-default-checkbox">
                                </th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Order ID</th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Billing Name</th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Date</th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Total</th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Payment Status
                                </th>
                                <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Payment Method
                                </th>
                                <th scope="col" class="p-3 text-center text-xs font-medium text-gray-700">View Details
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-sm">
                            <tr>
                                <td class="text-center p-3">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-default-checkbox">
                                </td>
                                <td class="p-3">
                                    <a href="#" class="font-semibold text-blue-600">#SK2540</a>
                                </td>
                                <td class="p-3">Neal Matthews</td>
                                <td class="p-3">07 Oct, 2021</td>
                                <td class="p-3">$400</td>
                                <td class="p-3">
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Success</span>
                                </td>
                                <td class="p-3 flex items-center">
                                    <i class='bx bx-credit-card text-gray-400 mr-2 text-xl'></i>
                                    Mastercard
                                </td>
                                <td class="p-3 text-center">
                                    <a href="#" class="text-blue-600 hover:underline">View details</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
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
    </div>
@endsection
