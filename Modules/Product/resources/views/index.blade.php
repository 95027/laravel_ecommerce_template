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
            <a type="button" href="{{ route('product.create') }}"
                class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                <i class="bx bx-plus"></i>
                Add Product
            </a>
        </div>

        
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
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
                        <div class="select-menu py-2 px-4 w-full border border-gray-300 rounded-lg text-sm cursor-pointer">
                            <div class="select-btn flex items-center">
                                <span class="sBtn-text">Fillter with Category</span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                            <ul class="options bg-gray-300">
                                @foreach ($categories as $category)
                                    <li class="option hover:bg-gray-200">
                                        <span class="option-text px-4">{{ $category->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="me-3">
                        <div class="select-menu py-2 px-4 w-full border border-gray-300 rounded-lg text-sm cursor-pointer">
                            <div class="select-btn flex items-center">
                                <span class="sBtn-text">Fillter with Sub-Category</span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                            <ul class="options bg-gray-300">
                                @foreach ($subCategories as $subCategory)
                                    <li class="option hover:bg-gray-200">
                                        <span class="option-text px-4">{{ $subCategory->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="me-3">
                        <div class="select-menu py-2 px-4 w-full border border-gray-300 rounded-lg text-sm cursor-pointer">
                            <div class="select-btn flex items-center">
                                <span class="sBtn-text">Fillter with Brand</span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                            <ul class="options bg-gray-300 shadow-inner">
                                @foreach ($brands as $brand)
                                    <li class="option hover:bg-gray-200">
                                        <span class="option-text px-4">{{ $brand->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <table class="min-w-full table-auto bg-white ">
                <thead>
                    <tr class="text-left text-gray-600 uppercase text-base leading-normal">
                        <th class="py-3">Sl.No</th>
                        {{-- <th class="py-3 px-8">Product id</th> --}}
                        <th class="py-3 px-6">Image</th>
                        <th class="py-3 px-6">Title</th>
                        <th class="py-3 px-6">Brand</th>
                        <th class="py-3 px-6">Category</th>
                        <th class="py-3 px-6">MRP</th>
                        <th class="py-3 px-6">Offred Price</th>
                        <th class="py-3 px-6">Stock</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-s font-light">
                    @foreach ($products as $i => $product)
                        <tr class="">
                            <td class="py-3 px-6">{{ $i + 1 }}</td>
                            <td class="py-3 px-6">
                                <img class="w-12 h-12 rounded-full"
                                    src="{{ asset('storage/products/' . $product->media->where('featured', 1)->first()->file_name) }}"
                                    alt="{{ $product->id }}">
                            </td>
                            <td class="py-3 px-6">{{ $product->title }}</td>
                            <td class="py-3 px-6">{{-- {{ $product->brand->name }} --}}</td>
                            <td class="py-3 px-6">{{ $product->category->name }}</td>
                            <td class="py-3 px-6">{{ $product->mrp }}</td>
                            <td class="py-3 px-6">{{ $product->price }}</td>
                            <td class="py-3 px-6">{{ $product->quantity }}</td>
                            <td class="py-3 px-6">
                                @php
                                    $color = $product->status === 1 ? 'green' : 'red';
                                    $status = $product->status === 1 ? 'Active' : 'In Active';
                                @endphp
                                <span
                                    class="rounded-md bg-{{ $color }}-50 px-2 py-1 text-xs font-medium text-{{ $color }}-700 ring-1 ring-inset ring-green-600/20">{{ $status }}</span>
                            </td>
                            <td class="py-3 text-center flex justify-center gap-3">
                                {{-- <a
                                    class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                        class="fa-regular fa-eye"></i></a> --}}
                                <a href="{{ route('product.edit', $product->id) }}"
                                    class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <form id="deleteModal" action="{{ route('product.destroy', $product->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete()"
                                        class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Additional rows go here -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
