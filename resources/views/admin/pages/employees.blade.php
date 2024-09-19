@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <table class="min-w-full table-auto bg-white">
                <thead>
                    <tr class="text-left text-gray-600 uppercase text-xs leading-normal">
                        <th class="py-3">Employee Id</th>
                        <th class="py-3 px-6">Name / Email</th>
                        <th class="py-3">Mobile</th>
                        <th class="py-3">Role</th>
                        <th class="py-3">Status</th>
                        <th class="py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <tr>
                        <td class="py-3 px-6">EMP001</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center gap-2">
                                <span class="bg-sky-600 p-3 rounded-full text-white font-bold">JD</span>
                                <div>
                                    <p>John Doe</p>
                                    <span class="text-gray-400 text-xs">john.doe@example.com</span>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-6">+1 234 567 890</td>
                        <td class="py-3 px-6">Manager</td>
                        <td class="py-3 px-6">
                            <span
                                class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                        </td>
                        <td class="py-3 text-center flex justify-evenly">
                            <a href=""
                                class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center"><i
                                    class="fa-regular fa-eye"></i></a>
                            <a href=""
                                class="bg-yellow-200 bg-opacity-60 hover:text-yellow-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <a href=""
                                class="bg-red-300 bg-opacity-60 hover:text-red-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
@endsection
