@extends('admin.layout.master')
@section('content')
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
                <li class="inline-flex items-center text-xs font-semibold text-blue-600 truncate dark:text-neutral-200"
                    aria-current="page">
                    Products
                </li>
            </ol>
        </div>
        <a type="button" href="{{ route('product.create') }}"
            class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
            <i class="bx bx-plus"></i>
            Add Product
        </a>
    </div>
    <div class="card mt-6 bg-white shadow-lg rounded-lg">
        <div class="card-header flex justify-between items-center py-4 border-b-2 pb-4">
            <div class="mx-3">
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
                        data-hs-select='{
                    "placeholder": "Fillter by category",
                    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                    "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
                  }'>
                        <option value="" hidden>Choose</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="me-3">
                    <select
                        data-hs-select='{
                    "placeholder": "Fillter by sub category",
                    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                    "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
                  }'>
                        <option value="" hidden>Choose</option>
                        @foreach ($subCategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="me-3">
                    <select
                        data-hs-select='{
                    "placeholder": "Fillter by brand",
                    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                    "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
                  }'>
                        <option value="" hidden>Choose</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
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
                            <th scope="col" class="p-3 text-left text-sm font-bold text-gray-700">Sl.No</th>
                            <th scope="col" class="p-3 text-left text-sm font-bold text-gray-700">Product Name</th>
                            <th scope="col" class="p-3 text-left text-sm font-bold text-gray-700">Brand</th>
                            <th scope="col" class="p-3 text-left text-sm font-bold text-gray-700">Category</th>
                            <th scope="col" class="p-3 text-left text-sm font-bold text-gray-700">MRP
                            </th>
                            <th scope="col" class="p-3 text-left text-sm font-bold text-gray-700">Sale Price
                            </th>
                            <th scope="col" class="p-3 text-center text-sm font-bold text-gray-700">Stock
                            </th>
                            <th scope="col" class="p-3 text-center text-sm font-bold text-gray-700">Status
                            </th>
                            <th scope="col" class="p-3 text-center text-sm font-bold text-gray-700">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-sm">
                        @foreach ($products as $i => $product)
                            <tr>
                                <td class="text-center p-3">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-default-checkbox">
                                </td>
                                <td class="p-3">
                                    <a href="#" class="font-semibold text-blue-600">{{ $i + 1 }}</a>
                                </td>
                                <td class="p-3">
                                    <div class="flex items-center gap-2">
                                        <img class="w-12 h-12 rounded-full"
                                            src="{{ asset('storage/products/' . $product->media->where('featured', 1)->first()->file_name) }}"
                                            alt="{{ $product->id }}">
                                        <div>
                                            <p class="font-bold">{{ $product->title }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-3">{{ $product->brand->name }}</td>
                                <td class="p-3">{{ $product->category->name }}</td>
                                <td class="p-3">₹ {{ $product->mrp }}</td>
                                <td class="p-3">₹ {{ $product->price }}</td>
                                <td class="p-3 text-center">{{ $product->quantity }}</td>
                                <td class="p-3 text-center">
                                    @if ($product->status == 1 && $product->quantity >= 10)
                                        <span
                                            class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                                    @elseif ($product->status == 1 && $product->quantity < 10)
                                        <span
                                            class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Low
                                            Stock</span>
                                    @elseif ($product->status == 0)
                                        <span
                                            class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Out
                                            Of Stock</span>
                                    @endif
                                </td>
                                <td class="flex mt-6 justify-center gap-3">
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="edit-employee hover:text-yellow-600 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                            class="fa-regular fa-pen-to-square text-base"></i></a>
                                    <form id="deleteModal" action="{{ route('product.destroy', $product->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete()"
                                            class="hover:text-red-600 rounded-lg flex justify-center items-center cursor-pointer">
                                            <i class="fa-solid fa-trash-can text-base"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
