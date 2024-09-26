@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>Category</h4>
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
                        Category
                    </li>
                </ol>
            </div>
            <div>
                <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="add-category-offcanvas"
                    data-hs-overlay="#add-category-offcanvas"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                    <i class="bx bx-plus"></i>
                    Add Category
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
                        <th class="py-3 px-6">Icon / Thumbnail</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-s font-light">
                    @foreach ($categories as $i => $category)
                        <tr class="">
                            <td class="py-3 px-6">{{ $i + 1 }}</td>
                            <td class="py-3 px-6">{{ $category->name }}</td>
                            <td class="py-3 px-6">
                                <img class="w-12 h-12 rounded-full"
                                    src="{{ asset('storage/' . $category->media?->file_path) }}" alt="{{ $category->id }}">
                            </td>
                            <td class="py-3 px-6"><span
                                    class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                            </td>
                            <td class="py-3 text-center flex justify-center gap-3">
                                {{-- <a
                                    class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                        class="fa-regular fa-eye"></i></a> --}}
                                <a href="javascript:;" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="edit-category-offcanvas" data-hs-overlay="#edit-category-offcanvas"
                                    data-id="{{ $category->id }}"
                                    class="edit-category bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <form id="deleteModal" action="{{ route('category.destroy', $category->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $category->id }}">
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


    {{-- Add Category Offcanvas --}}
    <div id="add-category-offcanvas"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s"
        role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
        <div class="flex justify-between items-center py-3 px-4 border-b">
            <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800">
                Add Category
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
            <form id="add-category" data-parsley-validate action="{{ route('category.store') }}"
                onsubmit="jsValidator('add-category')" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Category
                        Name <abbr class="text-red-600">*</abbr></label>
                    <input type="text" name="name" required
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter category name">
                </div>
                <div class="max-w-sm mb-6">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Category
                        Image <abbr class="text-red-600">*</abbr></label>
                    <label for="file-input-medium" class="sr-only">Choose file</label>
                    <input type="file" name="image" required accept="image/*"
                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:outline-none focus:ring-0
                          file:bg-gray-50 file:border-0
                          file:me-4
                          file:py-3 file:px-4">
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
    {{-- Edit Category Offcanvas --}}
    <div id="edit-category-offcanvas"
        class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s"
        role="dialog" tabindex="-1" aria-labelledby="hs-edit-offcanvas-right-label">
        <div class="flex justify-between items-center py-3 px-4 border-b">
            <h3 id="hs-edit-offcanvas-right-label" class="font-bold text-gray-800">
                Edit Category
            </h3>
            <button type="button"
                class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                aria-label="Close" data-hs-overlay="#edit-category-offcanvas">
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
            <form id="edit-category-form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="max-w-sm mb-4">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Category Name
                        <abbr class="text-red-600">*</abbr></label>
                    <input id="edit-category-name" type="text" name="name"
                        class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                        placeholder="Enter category name">
                </div>
                <div class="max-w-sm mb-6">
                    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Category Image
                        <abbr class="text-red-600">*</abbr></label>
                    <input type="file" name="image" id="edit-category-image" accept="image/*"
                        class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:outline-none focus:ring-0
                  file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4">
                </div>
                <div class="">
                    <button type="submit"
                        class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-400 dark:bg-blue-800/30 dark:hover:bg-blue-800/20 dark:focus:bg-blue-800/20">
                        Update Category
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.edit-category').on('click', function() {
                var categoryId = $(this).data('id');
                const form = document.getElementById('edit-category-form');
                var editUrl = '{{ route('category.edit', ':id') }}';
                editUrl = editUrl.replace(':id', categoryId);
                $.ajax({
                    url: editUrl,
                    type: 'GET',
                    success: function(data) {
                        $('#edit-category-name').val(data.category.name);
                    },
                    error: function() {
                        alert('Failed to fetch category data');
                    }
                });
                var updateUrl = '{{ route('category.update', ':id') }}';
                updateUrl = updateUrl.replace(':id', categoryId);
                form.action = updateUrl;
            });
        });
    </script>
@endsection
