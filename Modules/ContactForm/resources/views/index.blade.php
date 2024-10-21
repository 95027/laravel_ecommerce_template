@extends('admin.layout.master')
@section('content')
    <div class="card mt-6 bg-white shadow-lg rounded-lg">
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
                            <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Customer Name</th>
                            <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Mobile</th>
                            <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Subject</th>
                            <th scope="col" class="p-3 text-left text-xs font-medium text-gray-700">Message</th>
                            <th scope="col" class="p-3 text-center text-xs font-medium text-gray-700">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 text-sm">
                        @if ($contacts->empty())
                            <tr>
                                <td colspan="6" class="text-center p-5" style="text-align: center;">
                                    <div class="" style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="{{ asset('assets/client/assets/imgs/gif/magnyfir.gif') }}" alt="No Orders"
                                            width="50">
                                        <p class="mt-3">No contact form data availabel</p>
                                    </div>
                                </td>
                            </tr>
                        @else
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td class="text-center p-3">
                                        <input type="checkbox"
                                            class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                            id="hs-default-checkbox">
                                    </td>
                                    <td class="p-3">
                                        <div class="flex items-center">
                                            <div class="h-11 w-11 flex-shrink-0">
                                                <img class="h-11 w-11 rounded-full"
                                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">{{ $contact->name }}</div>
                                                <div class="mt-1 text-gray-500">{{ $contact->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3">{{ $contact->phone }}</td>
                                    <td class="p-3">{{ $contact->title }}</td>
                                    <td class="p-3">{{ $contact->message }}</td>
                                    <td class="p-3 text-center">
                                        <form action="{{ route('admin.contact-form.delete', $contact->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i class='bx bxs-trash text-xl hover:text-red-700'></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
