@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="card shadow-lg p-2 rounded-lg">
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto bg-white ">
                    <thead>
                        <tr class="text-left text-gray-600 uppercase text-base leading-normal">
                            <th class="py-3 px-6">Sl.No</th>
                            <th class="py-3 px-6">DOR</th>
                            <th class="py-3 px-6">Name</th>
                            <th class="py-3 px-6">Phone</th>
                            <th class="py-3 px-6">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-xs font-light">
                        <tr class="">
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">
                                <div class="flex items-center gap-2">
                                    <img src="https://picsum.photos/200/300" class="w-10 h-10 rounded-full" alt="">
                                    <div>
                                        <p>John Doe</p>
                                        <span class="text-opacity-75">john@example.com</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6"><a href="">9876543210</a></td>
                            <td class="py-3 px-6"><span
                                    class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Badge</span>
                            </td>
                            <td class="py-3 px-6 text-center">
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

                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden w-30 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                                        role="menu" aria-orientation="vertical"
                                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                            href="#" aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-offcanvas-right" data-hs-overlay="#hs-offcanvas-right">
                                            <i class='bx bx-edit-alt text-lg'></i>
                                            Edit
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                            href="#">
                                            <i class='bx bx-trash text-lg'></i>
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Additional rows go here -->
                    </tbody>
                </table>
            </div>
        </div>



        {{-- User Edit Offcanvas --}}
        <div id="hs-offcanvas-right"
            class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-s"
            role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-right-label">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="hs-offcanvas-right-label" class="font-bold text-gray-800">
                    Edit User
                </h3>
                <button type="button"
                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none"
                    aria-label="Close" data-hs-overlay="#hs-offcanvas-right">
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
                <form action="" method="POST">
                    <div>

                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection
