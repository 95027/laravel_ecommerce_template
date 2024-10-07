@extends('admin.layout.master')
@section('content')
    <div class="container mx-auto mt-3">
        <div class="flex justify-between items-center mt-6 mb-3">
            <div>
                <h4>All Employees</h4>
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
                        Employees
                    </li>
                </ol>
            </div>
            <a type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="add-employee-offcanvas"
                data-hs-overlay="#add-employee-offcanvas"
                class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200 cursor-pointer">
                <i class="bx bx-plus"></i>
                Add Employee
            </a>
        </div>
        <div
            class="shadow-md shadow-gray-200 p-2 relative z-10 bg-white border rounded-xl md:p-5 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
            <table class="min-w-full table-auto bg-white">
                <thead class="border-b-2">
                    <tr class="text-left text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 w-36 font-extrabold">Employee Id</th>
                        <th class="py-3 w-72 font-extrabold">Name / Email</th>
                        <th class="py-3 w-32 font-extrabold">Mobile</th>
                        <th class="py-3 w-32 font-extrabold">Role</th>
                        <th class="py-3 w-60 font-extrabold">Share Credentials</th>
                        <th class="py-3 w-60 font-extrabold">Permissions</th>
                        <th class="py-3 w-30 font-extrabold">Status</th>
                        <th class="py-3 text-center w-40 font-extrabold">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($employees as $employee)
                        <tr>
                            <td class="py-3"><a href=""
                                    class="hover:text-blue-600 font-bold">{{ $employee->employeeId }}</a></td>
                            <td class="py-3">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="bg-sky-300 bg-opacity-80 w-12 h-12 rounded-full text-sky-800 text-xl font-bold flex justify-center items-center">
                                        {{ strtoupper(substr($employee->name, 0, 1)) }}{{ strtoupper(substr(last(explode(' ', $employee->name)), 0, 1)) }}
                                    </span>
                                    <div>
                                        <p class="font-bold">{{ $employee->name }}</p>
                                        <span class="text-gray-700 text-xs">{{ $employee->email }}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 font-semibold">{{ $employee->mobile }}</td>
                            <td class="py-3 font-semibold">{{ $employee->roles->pluck('name')->implode(', ') }}</td>
                            <td class="py-3 font-semibold">
                                <form action="{{ route('employee.reset-password.mail') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="employeeId" value="{{ $employee->id }}"/>
                                    <button type="submit"><span
                                        class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blur-600/20">Send
                                        Mail</span></button>
                                    </form>
                            </td>
                            <td class="py-3 font-semibold">{{ $employee->permissions->pluck('name')->implode(', ') }}</td>
                            <td class="py-3">
                                @if ($employee->status == 1)
                                    <span
                                        class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                                @elseif ($employee->status == 0)
                                    <span
                                        class="rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Inactive</span>
                                @endif
                            </td>
                            <td class="py-3 text-center flex justify-center gap-3">
                                {{-- <a
                                    class="bg-blue-300 bg-opacity-60 hover:text-blue-600 p-1 w-8 h-8 rounded-lg flex justify-center items-center cursor-pointer"><i
                                        class="fa-regular fa-eye"></i></a>  --}}
                                <a href="javascript:;" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="edit-employee-offcanvas" data-hs-overlay="#edit-employee-offcanvas"
                                    data-id="{{ $employee->id }}"
                                    class="edit-employee hover:text-yellow-600 p-1 rounded-lg cursor-pointer edit-employee-button"><i
                                        class="fa-regular fa-pen-to-square text-lg"></i></a>
                                <form action="{{ route('employee.destroy', $employee->id) }}" method="POST"
                                    id="deleteModal">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                        onclick="confirmDelete()"
                                        class="hover:text-red-600 p-1 rounded-lg cursor-pointer">
                                        <i class="fa-solid fa-trash-can text-lg"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- Add Employee Offcanvas --}}
<div id="add-employee-offcanvas"
    class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700"
    role="dialog" tabindex="-1" aria-labelledby="add-employee-offcanvas-label">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 id="add-employee-offcanvas-label" class="font-bold text-gray-800 dark:text-white">
            Add Employee
        </h3>
        <button type="button"
            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
            aria-label="Close" data-hs-overlay="#add-employee-offcanvas">
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
        <form action="{{ route('employee.store') }}" method="POST">
            @csrf
            <div class="max-w-sm mb-4">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Employee
                    Name <abbr class="text-red-600">*</abbr></label>
                <input type="text" name="name"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                    placeholder="Enter employee name">
            </div>
            <div class="max-w-sm mb-4">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Employee
                    Email <abbr class="text-red-600">*</abbr></label>
                <input type="email" name="email"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                    placeholder="Enter employee email">
            </div>
            <div class="max-w-sm mb-4">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Employee
                    Mobile <abbr class="text-red-600">*</abbr></label>
                <input type="number" name="mobile"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                    placeholder="Enter employee mobile">
            </div>
            <div class=" mb-4">
                <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
                    Role <abbr class="text-red-600">*</abbr></label>
                <select name="roles[]" multiple
                    data-hs-select='{
                "placeholder": "Select option...",
                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                "optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"
              }'>
                    <option value="" hidden>Choose</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="">
                <button type="submit" aria-haspopup="dialog" aria-expanded="false"
                    aria-controls="add-category-offcanvas" data-hs-overlay="#add-category-offcanvas"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200">
                    Add Employee
                </button>
            </div>
        </form>
    </div>
</div>
{{-- Edit Employee Offcanvas --}}
<div id="edit-employee-offcanvas"
    class="hs-overlay hs-overlay-open:translate-x-0 hidden translate-x-full fixed top-0 end-0 transition-all duration-300 transform h-full max-w-sm w-full z-[80] bg-white border-s dark:bg-neutral-800 dark:border-neutral-700"
    role="dialog" tabindex="-1" aria-labelledby="edit-employee-offcanvas-label">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
        <h3 id="add-employee-offcanvas-label" class="font-bold text-gray-800 dark:text-white">
            Edit Employee
        </h3>
        <button type="button"
            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
            aria-label="Close" data-hs-overlay="#edit-employee-offcanvas">
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
        <form id="editEmployeeForm" method="POST">
            @csrf
            @method('PUT')
            <div class="max-w-sm mb-4">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Employee
                    Name <abbr class="text-red-600">*</abbr></label>
                <input type="text" name="name" id="employeName"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                    placeholder="Enter employee name" value="">
            </div>
            <div class="max-w-sm mb-4">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Employee
                    Email <abbr class="text-red-600">*</abbr></label>
                <input type="email" name="email" id="employeeEmail"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                    placeholder="Enter employee email">
            </div>
            <div class="max-w-sm mb-4">
                <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Employee
                    Mobile <abbr class="text-red-600">*</abbr></label>
                <input type="number" name="mobile" id="employeeMobile"
                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-0"
                    placeholder="Enter employee mobile">
            </div>
            <div class="max-w-sm mb-4">
                <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Select
                    Role</label>
                <select id="hs-select-label" name="role" id="employeeRole"
                    class="py-3 px-4 pe-9 block w-full border border-gray-300 rounded-lg text-sm focus:border-outline-none focus:ring-0">
                    <option hidden>Select One</option>
                    <option value="owner">Owner</option>
                    <option value="manager">Manager</option>
                    <option value="accountent">Accountent</option>
                </select>
            </div>
            <div class="">
                <button type="submit"
                    class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-100 text-blue-800 hover:bg-blue-200 focus:outline-none focus:bg-blue-200">
                    Update Employee
                </button>
            </div>
        </form>
    </div>
</div>


@section('script')
    {{-- <script>
        $(document).ready(function() {
            $('.edit-employee').on('click', function() {
                var employeeId = $(this).data('id');
                const form = document.getElementById('editEmployeeForm');
                var editUrl = '{{ route(
                    'employee.details',
                    ': id ',
                ) }}';
editUrl = editUrl.replace(':id', employeeId);
$.ajax({
url: editUrl,
type: 'GET',
success: function(data) {
$('#employeName').val(data.employee.name);
$('#employeeEmail').val(data.employee.email);
$('#employeeMobile').val(data.employee.mobile);
$('#employeeRole').val(data.employee.role);
},
error: function() {
alert('failed to fetech employee data');
}
});

var updateUrl = '{{ route(
                    'employee.update',
                    ': id ',
                ) }}';
updateUrl = updateUrl.replace(':id', employeeId);
form.action = updateUrl;
});
});
</script> --}}
@endsection
