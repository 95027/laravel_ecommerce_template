<div class="bg-white sidebar h-auto">
    <div class="logo flex items-center p-3">
        <img src="{{ asset('assets/admin/images/logo/logo.png') }}" width="100" height="45" alt="logo">
        <span class="font-bold text-orange-400 text-3xl ms-2">Estore</span>
    </div>


    <div class="menu p-3 m-0 h-screen overflow-y-auto">
        <ul class="space-y-2">
            <div class="">
                <span class="text-gray-400 text-sm">Main Page</span>
                <li
                    class="relative m-1 {{ request()->routeIs('admin.dashboard') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="text-md flex items-center hover:text-blue-700 p-2">
                        <i class='bx bxs-dashboard me-2 text-2xl'></i>Dashboard
                    </a>
                </li>
            </div>
            <div class="">
                <span class="text-gray-400 text-sm">All Employees</span>
                <li
                    class="relative m-1 {{ request()->routeIs('employees') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                    <a href="{{ route('employees') }}" class="text-md flex items-center hover:text-blue-700 p-2">
                        <i class='bx bxs-dashboard me-2 text-2xl'></i>All Employees
                    </a>
                </li>
            </div>
            <div class="mb-4">
                <span class="text-gray-400 text-sm">Roles & Permissions</span>
                <li class="dropdown m-1">
                    <a href="#"
                        class="dropdown-toggle   text-md flex items-center justify-between hover:text-blue-700 p-2 {{-- {{ request()->routeIs('') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }} --}}">
                        <span class="flex items-center justify-between"><i class='bx bx-user-plus text-2xl me-2'></i> Roles & Permissions</span>
                        <i class='bx bx-plus'></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu marker:text-blue-400 list-disc" role="list">
                        <li class=""><a href="{{-- {{ route('') }} --}}"
                                class="p-2 {{-- {{ request()->routeIs('') ? 'text-blue-700' : 'hover:text-blue-700' }} --}}">Add Role</a>
                        </li>
                        <li class=""><a href="{{-- {{ route('') }} --}}"
                                class="p-2 {{-- {{ request()->routeIs('') ? 'text-blue-700' : 'hover:text-blue-700' }} --}}">Assign Permissions</a>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="mb-4">
                <span class="text-gray-400 text-sm">All Users</span>
                <li class="dropdown m-1">
                    <a href="#"
                        class="dropdown-toggle   text-md flex items-center justify-between hover:text-blue-700 p-2 {{ request()->routeIs('admin.user') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                        <span class="flex items-center justify-between"><i class='bx bx-user text-2xl me-2'></i> User
                            Management</span>
                        <i class='bx bx-plus'></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu marker:text-blue-400 list-disc" role="list">
                        <li class=""><a href="{{ route('admin.user') }}"
                                class="p-2 {{ request()->routeIs('admin.user') ? 'text-blue-700' : 'hover:text-blue-700' }}">All
                                Users</a>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="mb-4">
                <span class="text-gray-400 text-sm">Products</span>
                <li class="dropdown m-1">
                    <a
                        class="dropdown-toggle  text-md flex items-center justify-between hover:text-blue-700 p-2 {{ request()->routeIs('product', 'category', 'category.sub-category', 'brand') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                        <span class="flex justify-between items-center">
                            <i class='bx bxl-product-hunt text-2xl me-2'></i>
                            Product Management
                        </span>
                        <i class='bx bx-plus'></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu marker:text-blue-400 list-disc {{ request()->routeIs('product', 'category', 'category.sub-category', 'brand') ? 'show' : '' }}"
                        role="list">
                        <li>
                            <a href="{{ route('product') }}"
                                class="p-2 {{ request()->routeIs('product') ? 'text-blue-700' : 'hover:text-blue-700' }}">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category') }}"
                                class="p-2 {{ request()->routeIs('category') ? 'text-blue-700' : 'hover:text-blue-700' }}">
                                Parent Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category.sub-category') }}"
                                class="p-2 {{ request()->routeIs('category.sub-category') ? 'text-blue-700' : 'hover:text-blue-700' }}">
                                Sub Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('brand') }}"
                                class="p-2 {{ request()->routeIs('brand') ? 'text-blue-700' : 'hover:text-blue-700' }}">
                                Brands
                            </a>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="mb-4">
                <span class="text-gray-400 text-sm">Orders</span>
                <li class="dropdown m-1">
                    <a href="#"
                        class="dropdown-toggle   text-md flex items-center justify-between  hover:text-blue-700 p-2 {{ request()->routeIs('allOrders') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                        <span class="flex justify-between items-center"><i class='bx bx-sort text-2xl me-2'></i> Order
                            Management</span>
                        <i class='bx bx-plus'></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul
                        class="dropdown-menu marker:text-blue-400 list-disc {{ request()->routeIs('allOrders') ? 'show' : '' }}">
                        <li><a href="{{ route('allOrders') }}"
                                class=" p-2 {{ request()->routeIs('allOrders') ? 'text-blue-700' : 'hover:text-blue-700' }}">All
                                Orders</a>
                        </li>
                    </ul>
                </li>
            </div>
            <div class="mb-4 ">
                <span class="text-gray-400 text-sm">Contact Form</span>
                <li
                    class="relative m-1 {{ request()->routeIs('contactForm') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                    <a href="{{ route('contactForm') }}" class="text-md flex items-center hover:text-blue-700 p-2">
                        <i class='bx bxs-contact me-2 text-2xl'></i>Contact Forms</a>
                </li>
            </div>
            <div class="mb-4">
                <span class="text-gray-400 text-sm">Support</span>
                <li
                    class="m-1 {{ request()->routeIs('support-ticket') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                    <a href="#" class="text-md flex items-center hover:text-blue-700 p-2">
                        <i class='bx bx-support me-2 text-2xl'></i>Support Ticket</a>
                </li>
            </div>
            <div class="mb-4 ">
                <span class="text-gray-400 text-sm">Reviews</span>
                <li
                    class="relative m-1 {{ request()->routeIs('reviewPage') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                    <a href="{{ route('reviewPage') }}" class="text-md flex items-center hover:text-blue-700 p-2">
                        <i class='bx bxs-star-half me-2 text-2xl'></i>Reviews</a>
                </li>
            </div>
            <div class="mb-4 ">
                <span class="text-gray-400 text-sm">Coupons</span>
                <li
                    class="relative m-1 {{ request()->routeIs('coupons') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                    <a href="{{ route('coupons') }}" class="text-md flex items-center hover:text-blue-700 p-2">
                        <i class='bx bxs-coupon me-2 text-2xl'></i>Coupons</a>
                </li>
            </div>
            <div class="mb-4">
                <span class="text-gray-400 text-sm">All Report</span>
                <li class="dropdown m-1">
                    <a href="#"
                        class="dropdown-toggle   text-md flex items-center justify-between hover:text-blue-700 p-2 {{ request()->routeIs('') ? 'bg-blue-200 bg-opacity-60 rounded-br-md rounded-se-md text-blue-600 shadow-2xl font-bold active-tab' : '' }}">
                        <span class="flex items-center justify-between"><i class='bx bx-user text-2xl me-2'></i> All
                            Reports</span>
                        <i class='bx bx-plus'></i>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu marker:text-blue-400 list-disc" role="list">
                        <li class="">
                            <a href="#" class="text-md flex items-center hover:text-blue-700 p-2">
                                <i class='bx bxs-report me-2 text-2xl'></i>Transaction Report</a>
                        </li>
                        <li class="">
                            <a href="#" class="text-md flex items-center hover:text-blue-700 p-2">
                                <i class='bx bxs-report me-2 text-2xl'></i>Sales Report</a>
                        </li>
                        <li class="">
                            <a href="#" class="text-md flex items-center hover:text-blue-700 p-2">
                                <i class='bx bxs-report me-2 text-2xl'></i>Product Report</a>
                        </li>
                        <li class="">
                            <a href="#" class="text-md flex items-center hover:text-blue-700 p-2">
                                <i class='bx bxs-report me-2 text-2xl'></i>Brand Report</a>
                        </li>
                    </ul>
                </li>
            </div>
        </ul>

    </div>
</div>
