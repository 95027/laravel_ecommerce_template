@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="card p-2 rounded-xl">
            <div class="card-header flex justify-between items-center py-4 ">
                <div>
                    <h4>Brand Report</h4>
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
                        <li class="inline-flex items-center">
                            <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                                href="#">
                                Reports
                            </a>
                            <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="10"
                                height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                            </svg>
                        </li>
                        <li class="inline-flex items-center text-xs font-semibold text-blue-600 truncate dark:text-neutral-200"
                            aria-current="page">
                            Brand Report
                        </li>
                    </ol>
                </div>
            </div>

            <div class="card-body overflow-x-auto">
                <div
                    class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                    <div class="card-header flex justify-between items-center py-4 border-b-2 pb-4">
                        <div>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                    <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                                <input
                                    class="py-3 ps-10 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 "
                                    type="text" role="combobox" aria-expanded="false"
                                    placeholder="Search by transaction number" value="" data-hs-combo-box-input="">
                            </div>
                        </div>
                    </div>
                    <table class="min-w-full table-auto bg-white">
                        <thead>
                            <tr class="text-left text-gray-600 uppercase text-xs leading-normal">
                                <th class="py-3">SI No.</th>
                                <th class="py-3">Brand Name</th>
                                <th class="py-3">Product Listed</th>
                                <th class="py-3">Sales Count</th>
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
