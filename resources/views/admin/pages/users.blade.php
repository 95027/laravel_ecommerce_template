@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>All Users</h4>
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
                        Users
                    </li>
                </ol>
            </div>
        </div>
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <table class="min-w-full table-auto bg-white ">
                <thead class="border-b-2">
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
                    @foreach ($users as $user)                        
                    <tr class="">
                        <td class="py-3 px-6">{{$user->id}}</td>
                        <td class="py-3 px-6">1</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center gap-2">
                                <img src="https://picsum.photos/200/300" class="w-10 h-10 rounded-full" alt="">
                                <div>
                                    <p>{{$user->name}}</p>
                                    <span class="text-opacity-75">{{$user->email}}</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-6"><a href="">9876543210</a></td>
                        <td class="py-3 px-6">
                            <span class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                        </td>
                        <td class="py-3 text-center flex justify-evenly">
                            <a
                                class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a href="javascript:;" aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="edit-employee-offcanvas" data-hs-overlay="#edit-employee-offcanvas"
                           {{--      data-id="{{ $employee->id }}" --}}
                                class="edit-employee bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer edit-employee-button"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <form action="" method="POST"
                                id="delete-form-{{-- {{ $employee->id }} --}}">
                                @csrf
                                @method('DELETE')
                                {{-- <input type="hidden" name="id" value="{{ $employee->id }}"> --}}
                                <button type="button"
                                    {{-- onclick="confirmDelete('{{ $employee->id }}', '{{ $employee->name }}')" --}}
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
@endsection
