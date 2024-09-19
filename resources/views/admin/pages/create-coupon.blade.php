@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="card p-2 rounded-xl">
            <div class="card-header flex justify-between items-center py-4 ">
                <div>
                    <h4>Coupons</h4>
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
                            Coupons
                        </li>
                    </ol>
                </div>
                <div>
                    <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="add-coupon-offcanvas"
                        data-hs-overlay="#add-coupon-offcanvas"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                        <i class="bx bx-plus"></i>
                        Add Coupon
                    </button>
                </div>
            </div>

            <div class="card-body overflow-x-auto">
                <div
                    class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                    <table class="min-w-full table-auto bg-white">
                        <thead>
                            <tr class="text-left text-gray-600 uppercase text-xs leading-normal">
                                <th class="py-3">Coupon Code</th>
                                <th class="py-3 px-6">Exipre Date</th>
                                <th class="py-3">Min Purchase</th>
                                <th class="py-3">Discount Amount / Percentage</th>
                                <th class="py-3">Type <small>(Product,Category or Sub Category)</small></th>
                                <th class="py-3">Tota Used / Total Coupon</th>
                                <th class="py-3">Status</th>
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
    {{-- Add Category Offcanvas --}}
    <div id="add-coupon-offcanvas"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s"
        role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
        <div class="flex justify-between items-center py-3 px-4 border-b">
            <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800">
                Add Coupon
            </h3>
            <button type="button"
                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Close" data-hs-overlay="#add-coupon-offcanvas">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
        </div>
        <div class="p-4">
            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Coupon Code <abbr
                            class="text-red-600">*</abbr></label>
                    <input type="text" name="name"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter brand name">
                </div>
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Expire Date <abbr
                            class="text-red-600">*</abbr></label>
                    <input type="date" name="name"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter brand name" min="<?= date('Y-m-d') ?>">
                </div>
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Minimum Purchase Value
                        <small>(optional)</small></label>
                    <input type="number" name="name"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter Amount">
                </div>
                <div class="max-w-sm mb-4">
                    <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select <small>(Product,Category or Sub Category)</small></label>
                    <select id="hs-select-label"
                        class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0">
                        <option selected="">Open this select menu</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="add-category-offcanvas" data-hs-overlay="#add-category-offcanvas"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                        Add Brand
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
