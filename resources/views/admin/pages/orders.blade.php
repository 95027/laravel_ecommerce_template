@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>All Orders</h4>
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
                    <li class="inline-flex items-center text-xs font-semibold text-gray-800 truncate dark:text-neutral-200"
                        aria-current="page">
                        Orders
                    </li>
                </ol>
            </div>
        </div>
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <table class="min-w-full table-auto bg-white">
                <div class="flex justify-between">
                    <div class="max-w-xs mb-4">
                        <input type="text" id="searchOrderNumber" name="order_number"
                            class="py-2 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                            placeholder="Search by order number">
                    </div>
                    <div class="flex gap-2">
                        <div>
                            <select name="role"
                                data-hs-select='{
                        "placeholder": "Fillter with status",
                        "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-0",
                        "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                        "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
                      }'>
                                <option value="" hidden>Choose</option>
                                <option value="owner">Pending</option>
                                <option value="manager">Processed</option>
                                <option value="accountent">Cancelled</option>
                            </select>
                        </div>
                        <div>
                            <input type="date" id="searchDate" name="date"
                                class="py-2 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0">
                        </div>
                    </div>
                </div>
                <thead>
                    <tr class="text-left text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 w-32 font-extrabold">Order Id</th>
                        <th class="py-3 w-72 font-extrabold">Customer</th>
                        <th class="py-3 w-72 font-extrabold">Product</th>
                        <th class="py-3 w-44 font-extrabold">Quantity</th>
                        <th class="py-3 w-44 font-extrabold">Total Price</th>
                        <th class="py-3 w-40 font-extrabold">Status</th>
                        <th class="py-3 text-center w-40 font-extrabold">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <tr>
                        <td class="py-3"><a href="" class="hover:text-blue-600 font-bold">123456</a></td>
                        <td class="py-3">
                            <div class="flex items-center gap-2">
                                <span
                                    class="bg-sky-300 bg-opacity-80 w-12 h-12 rounded-full text-sky-800 text-xl font-bold flex justify-center items-center">JD
                                </span>
                                <div>
                                    <p class="font-bold">Jhon Deo</p>
                                    <span class="text-gray-700 text-xs">jhondeo123@gmail.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-3">
                            <div class="flex items-center gap-2">
                                <img src="https://picsum.photos/200" alt="" class="w-12 h-12 rounded-full">
                                <div>
                                    <p class="font-bold">Jhon Deo</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 font-semibold">5</td>
                        <td class="py-3 font-semibold">₹ 9999.00</td>
                        <td class="py-3">
                            <span
                                class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                        </td>
                        <td class="py-3 text-center flex justify-evenly">
                            <a href="{{route('order-details')}}"
                                class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                    class="fa-regular fa-eye"></i></a>
                            {{-- <a
                                class="bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <button type="button"
                                class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                <i class="fa-solid fa-trash-can"></i>
                            </button> --}}

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
