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
                        <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                            href="{{ route('product') }}">
                            Products
                        </a>
                        <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="10" height="10"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </li>
                    <li class="inline-flex items-center text-xs font-semibold text-gray-800 truncate dark:text-neutral-200"
                        aria-current="page">
                        Add Products
                    </li>
                </ol>
            </div>
        </div>

        <form id="add-product" data-parsley-validate action="{{ route('product.store') }}" method="POST"
            onsubmit="jsValidator('add-product')" enctype="multipart/form-data">
            @csrf
            <div class="flex p-5">
                <div class="border-e border-gray-200 w-[15%] shadow-2xl ps-5 pt-5">
                    <nav class="flex flex-col space-y-2" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                        <button type="button"
                            class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
                            id="vertical-tab-with-border-item-1" aria-selected="true"
                            data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1"
                            role="tab">
                            General Information
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="vertical-tab-with-border-item-2" aria-selected="false"
                            data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2"
                            role="tab">
                            Images
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="vertical-tab-with-border-item-3" aria-selected="false"
                            data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3"
                            role="tab">
                            Inventory
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="vertical-tab-with-border-item-4" aria-selected="false"
                            data-hs-tab="#vertical-tab-with-border-4" aria-controls="vertical-tab-with-border-4"
                            role="tab">
                            Pricing
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="vertical-tab-with-border-item-5" aria-selected="false"
                            data-hs-tab="#vertical-tab-with-border-5" aria-controls="vertical-tab-with-border-5"
                            role="tab">
                            Additional Information
                        </button>
                        <button type="button"
                            class="hs-tab-active:border-blue-500 hs-tab-active:text-blue-600 py-1 pe-4 inline-flex items-center gap-x-2 border-e-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
                            id="vertical-tab-with-border-item-6" aria-selected="false"
                            data-hs-tab="#vertical-tab-with-border-6" aria-controls="vertical-tab-with-border-6"
                            role="tab">
                            Product Meta
                        </button>
                    </nav>
                </div>

                <div class="ms-3 w-[85%]">
                    <div id="vertical-tab-with-border-1" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-1">
                        <div class="shadow-2xl rounded-2xl p-8">
                            <div class="grid grid-cols-2 gap-2 gap-y-6 mb-4">
                                <div class="w-full">
                                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
                                        Name <abbr class="text-red-600">*</abbr></label>
                                    <input type="text" name="title"
                                        class="py-3 px-4 block w-full border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 border"
                                        placeholder="ABCDEFGHIJKLMNOPQRSTUVWXYZ" required>
                                </div>

                                <div>
                                    <label for="hs-select-label"
                                        class="block text-sm font-medium mb-2 dark:text-white">Select
                                        Brand <abbr class="text-red-600">*</abbr></label>
                                    <select name="brandId" required
                                        class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
                                        <option selected value="" hidden>Select Brand</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="hs-select-label"
                                        class="block text-sm font-medium mb-2 dark:text-white">Select
                                        Category <abbr class="text-red-600">*</abbr></label>
                                    <select name="categoryId" required
                                        class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
                                        <option selected value="" hidden>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label for="hs-select-label"
                                        class="block text-sm font-medium mb-2 dark:text-white">Select
                                        Sub-Category</label>
                                    <select name="subCategoryId"
                                        class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 ">
                                        <option selected value="" hidden>Sub-Category</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="max-w-full">
                                    <label for="textarea-label-with-helper-text"
                                        class="block text-sm font-medium mb-2 dark:text-white">Short Description <abbr
                                            class="text-red-600">*</abbr></label>
                                    <textarea id="textarea-label-with-helper-text" required name="short_description"
                                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 "
                                        rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"></textarea>
                                </div>
                                <div class="max-w-full">
                                    <label for="textarea-label-with-helper-text"
                                        class="block text-sm font-medium mb-2 dark:text-white">Description</label>
                                    <textarea id="textarea-label-with-helper-text"
                                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 "
                                        rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"
                                        name="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vertical-tab-with-border-2" class="hidden" role="tabpanel"
                        aria-labelledby="vertical-tab-with-border-item-2">
                        <div class="shadow-2xl rounded-2xl p-8">
                            <div class="mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
                                    Image <abbr class="text-red-600">*</abbr></label>
                                <label for="file-input-medium" class="sr-only">Choose file</label>
                                <input type="file" name="image" id="image" required
                                    class="block w-full border border-gray-300 shadow-sm rounded-lg text-sm focus:z-10 focus:border-outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                                  file:bg-gray-50 file:border-0
                                  file:me-4
                                  file:py-3 file:px-4
                                  dark:file:bg-neutral-700 dark:file:text-neutral-400">
                            </div>
                            <div>
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
                                    Gallery </label>
                                <div
                                    data-hs-file-upload='{
                                    "url": "/upload",
                                    "acceptedFiles": "image/*",
                                    "autoHideTrigger": false,
                                    "extensions": {
                                      "default": {
                                        "class": "shrink-0 size-5"
                                      },
                                      "xls": {
                                        "class": "shrink-0 size-5"
                                      },
                                      "zip": {
                                        "class": "shrink-0 size-5"
                                      },
                                      "csv": {
                                        "icon": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4\"/><path d=\"M14 2v4a2 2 0 0 0 2 2h4\"/><path d=\"m5 12-3 3 3 3\"/><path d=\"m9 18 3-3-3-3\"/></svg>",
                                        "class": "shrink-0 size-5"
                                      }
                                    }
                                  }'>

                                    <template data-hs-file-upload-preview="">
                                        <div
                                            class="relative w-20 h-20 mt-2 p-2 bg-white border border-gray-300 rounded-xl">
                                            <img class="mb-2 w-16 h-16 object-cover rounded-lg" data-dz-thumbnail="">

                                            <div class="mb-1 flex justify-between items-center gap-x-3 whitespace-nowrap">
                                                <div class="w-10">
                                                    <span class="text-sm text-gray-800">
                                                        <span data-hs-file-upload-progress-bar-value="">0</span>%
                                                    </span>
                                                </div>

                                                <div class="flex items-center gap-x-2">
                                                    <button type="button"
                                                        class="text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800"
                                                        data-hs-file-upload-remove="">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M3 6h18"></path>
                                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                            <line x1="10" x2="10" y1="11"
                                                                y2="17">
                                                            </line>
                                                            <line x1="14" x2="14" y1="11"
                                                                y2="17">
                                                            </line>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden"
                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100" data-hs-file-upload-progress-bar="">
                                                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition-all duration-500 hs-file-upload-complete:bg-green-500"
                                                    style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
                                            </div>
                                        </div>
                                    </template>

                                    <div class="cursor-pointer p-12 flex justify-center bg-white border border-dashed border-gray-300 rounded-xl"
                                        data-hs-file-upload-trigger="">
                                        <div class="text-center">
                                            <span
                                                class="inline-flex justify-center items-center size-16 bg-gray-100 text-gray-800 rounded-full">
                                                <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" x2="12" y1="3" y2="15">
                                                    </line>
                                                </svg>
                                            </span>

                                            <div
                                                class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-gray-600">
                                                <span class="pe-1 font-medium text-gray-800">
                                                    Drop your file here or
                                                </span>
                                                <span
                                                    class="bg-white font-semibold text-blue-600 hover:text-blue-700 rounded-lg decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2">browse</span>
                                            </div>

                                            <p class="mt-1 text-xs text-gray-400">
                                                Pick a file up to 2MB.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-4 gap-x-2 empty:gap-0" data-hs-file-upload-previews="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="vertical-tab-with-border-3" class="hidden" role="tabpanel"
                        aria-labelledby="vertical-tab-with-border-item-3">
                        <div class="shadow-2xl rounded-2xl p-8 grid grid-cols-2 gap-2">
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">SKU <abbr
                                        class="text-red-600">*</abbr></label>
                                <input type="text" id="input-label" required
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="SKU123" name="sku">
                            </div>
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Stock
                                    <abbr class="text-red-600">*</abbr></label>
                                <input type="number" id="input-label" required
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="10" name="quantity">
                            </div>
                            {{-- <div class="max-w-full">
                                <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Sale
                                    Price</label>
                                <input type="number" id="input-label"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="799">
                            </div> --}}
                        </div>
                    </div>
                    <div id="vertical-tab-with-border-4" class="hidden" role="tabpanel"
                        aria-labelledby="vertical-tab-with-border-item-4">
                        <div class="shadow-2xl rounded-2xl p-8 grid grid-cols-2 gap-2">
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Price
                                    <abbr class="text-red-600">*</abbr></label>
                                <input type="number" name="mrp" id="input-label" required
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="999">
                            </div>
                            <div class="max-w-full">
                                <label for="textarea-label" class="block text-sm font-medium mb-2 dark:text-white">Sale
                                    Price</label>
                                <input type="number" name="price" id="input-label"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="799">
                            </div>
                        </div>
                    </div>
                    <div id="vertical-tab-with-border-5" class="hidden" role="tabpanel"
                        aria-labelledby="vertical-tab-with-border-item-5">
                        <p class="text-gray-500">
                            This is the <em class="font-semibold text-gray-800">five</em> item's tab body.
                        </p>
                    </div>
                    <div id="vertical-tab-with-border-6" class="hidden" role="tabpanel"
                        aria-labelledby="vertical-tab-with-border-item-6">
                        <div class="shadow-2xl rounded-2xl p-8">
                            <div class="max-w-full mb-4">
                                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Meta
                                    Title</label>
                                <input type="text" id="input-label"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    placeholder="Product Meta Title" name="product_meta_title">
                            </div>
                            <div class="max-w-full">
                                <label for="textarea-label"
                                    class="block text-sm font-medium mb-2 dark:text-white">Comment</label>
                                <textarea id="textarea-label"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                                    rows="3" placeholder="Say hi..." name="product_meta_description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end mt-4 me-5">
                <button type="submit"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 ">
                    Add Product
                </button>
            </div>
        </form>

        {{-- <form action="" method="POST" class="w-full grid grid-cols-2 gap-2">
            <div class="shadow-2xl rounded-2xl p-8">
                <div class="grid grid-cols-2 gap-2 gap-y-6 mb-4">
                    <div class="w-full">
                        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
                            Name <abbr class="text-red-600">*</abbr></label>
                        <input type="text"
                            class="py-3 px-4 block w-full border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0 border"
                            placeholder="ABCDEFGHIJKLMNOPQRSTUVWXYZ">
                    </div>

                    <div>
                        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
                            Brand <abbr class="text-red-600">*</abbr></label>
                        <select
                            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
                            <option selected="" hidden>Select Brand</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div>
                        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
                            Category <abbr class="text-red-600">*</abbr></label>
                        <select
                            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
                            <option selected="" hidden>Select Category</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div>
                        <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
                            Sub-Category</label>
                        <select
                            class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 ">
                            <option selected="" hidden>Sub-Category</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="max-w-full">
                        <label for="textarea-label-with-helper-text"
                            class="block text-sm font-medium mb-2 dark:text-white">Short Description <abbr
                                class="text-red-600">*</abbr></label>
                        <textarea id="textarea-label-with-helper-text"
                            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 "
                            rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"></textarea>
                    </div>
                    <div class="max-w-full">
                        <label for="textarea-label-with-helper-text"
                            class="block text-sm font-medium mb-2 dark:text-white">Description</label>
                        <textarea id="textarea-label-with-helper-text"
                            class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0 "
                            rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"></textarea>
                    </div>
                </div>
            </div>
            <div class="shadow-2xl rounded-2xl p-8">
                <div class="mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
                        Image <abbr class="text-red-600">*</abbr></label>
                    <label for="file-input-medium" class="sr-only">Choose file</label>
                    <input type="file" name="file-input-medium" id="file-input-medium"
                        class="block w-full border border-gray-300 shadow-sm rounded-lg text-sm focus:z-10 focus:border-outline-none focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                      file:bg-gray-50 file:border-0
                      file:me-4
                      file:py-3 file:px-4
                      dark:file:bg-neutral-700 dark:file:text-neutral-400">
                </div>
                <div>
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Product
                        Gallery </label>
                    <div
                        data-hs-file-upload='{
                        "url": "/upload",
                        "acceptedFiles": "image/*",
                        "autoHideTrigger": false,
                        "extensions": {
                          "default": {
                            "class": "shrink-0 size-5"
                          },
                          "xls": {
                            "class": "shrink-0 size-5"
                          },
                          "zip": {
                            "class": "shrink-0 size-5"
                          },
                          "csv": {
                            "icon": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4\"/><path d=\"M14 2v4a2 2 0 0 0 2 2h4\"/><path d=\"m5 12-3 3 3 3\"/><path d=\"m9 18 3-3-3-3\"/></svg>",
                            "class": "shrink-0 size-5"
                          }
                        }
                      }'>

                        <template data-hs-file-upload-preview="">
                            <div class="relative w-20 h-20 mt-2 p-2 bg-white border border-gray-300 rounded-xl">
                                <img class="mb-2 w-16 h-16 object-cover rounded-lg" data-dz-thumbnail="">

                                <div class="mb-1 flex justify-between items-center gap-x-3 whitespace-nowrap">
                                    <div class="w-10">
                                        <span class="text-sm text-gray-800">
                                            <span data-hs-file-upload-progress-bar-value="">0</span>%
                                        </span>
                                    </div>

                                    <div class="flex items-center gap-x-2">
                                        <button type="button"
                                            class="text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800"
                                            data-hs-file-upload-remove="">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M3 6h18"></path>
                                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                <line x1="10" x2="10" y1="11" y2="17">
                                                </line>
                                                <line x1="14" x2="14" y1="11" y2="17">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden" role="progressbar"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                    data-hs-file-upload-progress-bar="">
                                    <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition-all duration-500 hs-file-upload-complete:bg-green-500"
                                        style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
                                </div>
                            </div>
                        </template>

                        <div class="cursor-pointer p-12 flex justify-center bg-white border border-dashed border-gray-300 rounded-xl"
                            data-hs-file-upload-trigger="">
                            <div class="text-center">
                                <span
                                    class="inline-flex justify-center items-center size-16 bg-gray-100 text-gray-800 rounded-full">
                                    <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <polyline points="17 8 12 3 7 8"></polyline>
                                        <line x1="12" x2="12" y1="3" y2="15"></line>
                                    </svg>
                                </span>

                                <div class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-gray-600">
                                    <span class="pe-1 font-medium text-gray-800">
                                        Drop your file here or
                                    </span>
                                    <span
                                        class="bg-white font-semibold text-blue-600 hover:text-blue-700 rounded-lg decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2">browse</span>
                                </div>

                                <p class="mt-1 text-xs text-gray-400">
                                    Pick a file up to 2MB.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-4 gap-x-2 empty:gap-0" data-hs-file-upload-previews=""></div>
                    </div>
                </div>
            </div>
        </form> --}}
    </div>
@endsection
