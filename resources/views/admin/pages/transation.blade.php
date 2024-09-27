@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>All Transations</h4>
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
                        Transations
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
                            placeholder="Search by transation number">
                    </div>
                    <div class="flex gap-2">
                        <div>
                            <input type="date" id="searchDate" name="date"
                                class="py-2 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0">
                        </div>
                    </div>
                </div>
                <thead>
                    <tr class="text-left text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 w-40 font-extrabold">Transation Id</th>
                        <th class="py-3 w-72 font-extrabold">Customer</th>
                        <th class="py-3 w-40 font-extrabold">Mode</th>
                        <th class="py-3 w-40 font-extrabold">Amount</th>
                        <th class="py-3 w-40 font-extrabold">Date</th>
                        <th class="py-3 w-40 font-extrabold">Status</th>
                        <th class="py-3 text-center w-40 font-extrabold">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">

                </tbody>
            </table>
        </div>
    </div>
@endsection
