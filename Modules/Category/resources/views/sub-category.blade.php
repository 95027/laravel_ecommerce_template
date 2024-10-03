@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>Sub Category</h4>
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
                        Sub Category
                    </li>
                </ol>
            </div>
            <div>
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="add-category-offcanvas"
                    data-hs-overlay="#add-category-offcanvas"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                    <i class="bx bx-plus"></i>
                    Add Sub-Category
                </button>
            </div>
        </div>
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <table class="min-w-full table-auto bg-white ">
                <thead class="border-b-2">
                    <tr class="text-left text-gray-600 uppercase text-base leading-normal">
                        <th class="py-3 px-6">Sl.No</th>
                        <th class="py-3 px-6">Name</th>
                        <th class="py-3 px-6">Parent Category</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-md font-light">
                    @foreach ($subCategories as $i => $SubCategory)
                        <tr class="">
                            <td class="py-3 px-6">{{ $i + 1 }}</td>
                            <td class="py-3 px-6">{{ $SubCategory->name }}</td>
                            <td class="py-3 px-6">{{ $SubCategory->parent->name }}</td>
                            <td class="py-3 px-6"><span
                                    class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                            </td>
                            <td class="py-3 text-center flex justify-center gap-3">
                                {{-- <a
                                    class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                        class="fa-regular fa-eye"></i></a> --}}
                                <a href="javascript:;" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="edit-subCategory-offcanvas" data-hs-overlay="#edit-subCategory-offcanvas"
                                    data-id="{{ $SubCategory->id }}"
                                    class="editSubCategory bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <form action="{{ route('sub-category.destroy', $SubCategory->id) }}" method="POST"
                                    id="deleteModal">
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
                </tbody>
            </table>
        </div>
    </div>


    {{-- Add Category Offcanvas --}}
    <div id="add-category-offcanvas"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s"
        role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
        <div class="flex justify-between items-center py-3 px-4 border-b">
            <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800">
                Add Sub-Category
            </h3>
            <button type="button"
                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Close" data-hs-overlay="#add-category-offcanvas">
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
            <form id="add-sub-category" data-parsley-validate action="{{ route('sub-category.store') }}"
                onsubmit="jsValidator('add-sub-category')" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Parent Category
                        <abbr class="text-red-600">*</abbr></label>
                    {{-- <select name="parentId" required
                        class="mb-4 py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0">
                        <option selected value="" hidden>Select Parent Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select> --}}
                    <select name="parentId" required
                        data-hs-select='{
            "placeholder": "Fillter by category",
            "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
            "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
          }'>
                        <option value="" hidden>Select Parent Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Category
                        Name <abbr class="text-red-600">*</abbr></label>
                    <input type="text" name="name" required
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter category name">
                </div>
                <div class="">
                    <button type="submit" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="add-category-offcanvas"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                        Add Category
                    </button>
                </div>

            </form>
        </div>
    </div>

    {{-- edit Category Offcanvas --}}
    <div id="edit-subCategory-offcanvas"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s"
        role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
        <div class="flex justify-between items-center py-3 px-4 border-b">
            <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800">
                Edit Sub-Category
            </h3>
            <button type="button"
                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Close" data-hs-overlay="#edit-subCategory-offcanvas">
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
            <form id="edit-sub-category" data-parsley-validate onsubmit="jsValidator('edit-sub-category')" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Parent Category
                    <abbr class="text-red-600">*</abbr></label>
                <select name="parentId" required
                    class="mb-4 py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Category
                        Name <abbr class="text-red-600">*</abbr></label>
                    <input type="text" name="name" required
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter category name" id="sub-category-name">
                </div>
                <div class="">
                    <button type="submit" aria-haspopup="dialog" aria-expanded="false"
                        aria-controls="edit-subCategory-offcanvas"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.editSubCategory').on('click', function() {
                var subCategoryId = $(this).data('id');
                const form = document.getElementById('edit-sub-category');
                var editUrl = '{{ route('sub-category.edit', ':id') }}';
                editUrl = editUrl.replace(':id', subCategoryId);
                $.ajax({
                    url: editUrl,
                    type: 'GET',
                    success: function(data) {
                        console.log(data);
                        $('#sub-category-name').val(data.subCategory.name);
                        $('select[name="parentId"]').val(data.subCategory.parentId).change();
                    },
                    error: function() {
                        alert('Failed to fetch category data');
                    }
                });
                var updateUrl = '{{ route('sub-category.update', ':id') }}';
                updateUrl = updateUrl.replace(':id', subCategoryId);
                form.action = updateUrl;
            });
        });
    </script>
@endsection
