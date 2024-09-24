@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <table class="min-w-full table-auto bg-white">
                <thead>
                    <tr class="text-left text-gray-600 uppercase text-xs">
                        <th class="py-3">Order No</th>
                        <th class="py-3 px-6">Name</th>
                        <th class="py-3">Quantity</th>
                        <th class="py-3">Total Price</th>
                        <th class="py-3">Status</th>
                        <th class="py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <tr>
                        <td class="py-3">1001</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2">Product A</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">2</td>
                        <td class="py-3 px-2">$20.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Completed</span>
                        </td>
                        <td class="py-3 text-center">
                            <a href="" class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">1002</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2">Product B</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">1</td>
                        <td class="py-3 px-2">$15.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Pending</span>
                        </td>
                        <td class="py-3 text-center">
                            <a href="" class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">1003</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2">Product C</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">5</td>
                        <td class="py-3 px-2">$75.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Cancelled</span>
                        </td>
                        <td class="py-3 text-center">
                            <a href="" class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">1004</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2">Product D</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">3</td>
                        <td class="py-3 px-2">$30.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Completed</span>
                        </td>
                        <td class="py-3 text-center">
                            <a href="" class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3">1005</td>
                        <td class="py-3 px-6">
                            <div class="flex items-center">
                                <img class="object-cover object-center w-10 h-10 rounded-full"
                                    src="https://picsum.photos/200" alt="User Image">
                                <span class="ml-2">Product E</span>
                            </div>
                        </td>
                        <td class="py-3 px-2">4</td>
                        <td class="py-3 px-2">$50.00</td>
                        <td class="py-3 px-2">
                            <span
                                class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-700 ring-1 ring-inset ring-yellow-600/20">Pending</span>
                        </td>
                        <td class="py-3 text-center">
                            <a href="" class="hover:text-blue-600"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
