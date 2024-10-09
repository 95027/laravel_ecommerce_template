@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="card p-2 rounded-xl">
            <div class="card-header flex justify-between items-center py-4 ">
                <div>
                    <h4>All Reviews</h4>
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
                            All Reviews
                        </li>
                    </ol>
                </div>
            </div>

            <div class="card-body overflow-x-auto">
                <div
                    class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                    <table class="min-w-full table-auto bg-white">
                        <thead>
                            <tr class="text-left text-gray-600 uppercase text-xs leading-normal">
                                <th class="py-3">SI No.</th>
                                <th class="py-3 px-3">Product Name</th>
                                <th class="py-3 px-3">Customer Name</th>
                                <th class="py-3">Rating</th>
                                <th class="py-3">Review</th>
                                <th class="py-3">Date</th>
                                <th class="py-3 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
