@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>Products</h4>
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
                        Products
                    </li>
                </ol>
            </div>
            <a type="button" href="{{route('product.add-product-page')}}"
                class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                <i class="bx bx-plus"></i>
                Add Product
            </a>
        </div>
        <div class="card p-2 rounded-lg boxShadow">
            <div class="card-header flex justify-between items-center py-4 border-b-2 mb-2">
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                            <svg class="shrink-0 size-4 text-gray-400 dark:text-white/60" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <path d="m21 21-4.3-4.3"></path>
                            </svg>
                        </div>
                        <input
                            class="py-3 ps-10 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 "
                            type="text" role="combobox" aria-expanded="false" placeholder="Type a name" value=""
                            data-hs-combo-box-input="">
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="me-3">
                        <select
                            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 ">
                            <option selected="">Filleter By Category</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="me-3">
                        <select
                            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 ">
                            <option selected="">Filleter By Sub-Category</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="me-3">
                        <select
                            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 ">
                            <option selected="">Filleter By Brand</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="card-body overflow-x-auto">
                <table class="min-w-full table-auto bg-white ">
                    <thead>
                        <tr class="text-left text-gray-600 uppercase text-base leading-normal">
                            <th class="py-3">Sl.No</th>
                            {{-- <th class="py-3 px-8">Product id</th> --}}
                            <th class="py-3 px-6">Image</th>
                            <th class="py-3 px-6">Name</th>
                            <th class="py-3 px-6">Brand</th>
                            <th class="py-3 px-6">Category</th>
                            <th class="py-3 px-6">Sub Category</th>
                            <th class="py-3 px-6">Price</th>
                            <th class="py-3 px-6">Offred Price</th>
                            <th class="py-3 px-6">Stock</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-xs font-light">
                        {{-- @foreach ($categorys as $category) --}}
                        <tr class="">
                            <td class="py-3 px-6"></td>
                            <td class="py-3 px-6"></td>
                            <td class="py-3 px-6">
                                {{-- <img class="max-w-16 rounded-full"
                                        src="{{ asset('storage/categories/' . $category->media?->file_name) }}"
                                        alt="categorie image"> --}}
                            </td>
                            {{-- <td class="py-3 px-6"><span
                                    class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                            </td> --}}
                            {{-- <td class="py-3 px-6 text-center">
                                <div class="hs-dropdown relative inline-flex">
                                    <button id="hs-dropdown-custom-icon-trigger" type="button"
                                        class="hs-dropdown-toggle flex justify-center items-center size-9 text-sm font-semibold rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        <svg class="flex-none size-4 text-gray-600 dark:text-neutral-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="1" />
                                            <circle cx="12" cy="5" r="1" />
                                            <circle cx="12" cy="19" r="1" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-30 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 z-10"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 edit-category"
                                            href="javascript:void(0);" data-id="" aria-haspopup="dialog"
                                            aria-expanded="false" aria-controls="edit-category-offcanvas"
                                            data-hs-overlay="#edit-category-offcanvas">
                                            <i class='bx bx-edit-alt text-lg'></i>
                                            Edit
                                        </a>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="">
                                            <button type="submit"
                                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100">
                                                <i class="bx bx-trash text-lg"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td> --}}
                        </tr>
                        {{-- @endforeach --}}
                        <!-- Additional rows go here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
