<div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-5 pb-4 menu">
        <a href="{{ route('admin.dashboard') }}" class="flex h-16 shrink-0 items-center">
            <img class="h-8 w-auto" src="{{ asset('assets/admin/images/logo/logo2.png') }}" alt="Your Company">
            <h1 class="text-3xl ms-2 font-bold text-white">Ecommerce</h1>
        </a>
        <nav class="flex flex-1 flex-col">
            <ul role="list" class="flex flex-1 flex-col -mx-0 space-y-1">
                <div class="mb-2">
                    <div class="text-xs font-semibold  text-gray-400">Dashboard</div>
                    <li
                        class="relative m-1 {{ request()->routeIs('admin.dashboard') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <a href="{{ route('admin.dashboard') }}"
                            class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <i class='bx bxs-dashboard text-2xl'></i>
                            Dashboard
                        </a>
                    </li>
                </div>
                {{-- @foreach ($sidebarSections as $section)
                    <div class="mb-2">
                        <div class="text-xs font-semibold  text-gray-400">{{ $section->heading }}</div>
                        <li
                            class="relative m-1 {{ request()->routeIs("{$section->slug}") ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                            <a href="{{ route('employee.employees') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold  {{ request()->routeIs($section->slug) ? 'text-white' : 'text-gray-400 hover:text-white' }} ">
                                <i class="{{ $section->icon }} text-2xl"></i>
                                {{ $section->title }}
                            </a>
                        </li>
                    </div>
                @endforeach --}}
                <div class="mb-2">
                    <div class="text-xs font-semibold  text-gray-400">All Employees</div>
                    <li
                        class="relative m-1 {{ request()->routeIs('employee.employees') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <a href="{{ route('employee.employees') }}"
                            class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold  {{ request()->routeIs('employee.employees') ? 'text-white' : 'text-gray-400 hover:text-white' }} ">
                            <i class="fa-solid fa-users text-lg"></i>
                            All Employees
                        </a>
                    </li>
                </div>

                <div class="mb-2" x-data="{ open: false }">
                    <div class="text-xs font-semibold  text-gray-400">Roles & Permissions</div>
                    <li
                        class="dropdown relative m-1 {{ request()->routeIs('rolePage') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <!-- Dropdown Toggle -->
                        <a href="#" @click="open = !open"
                            class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('rolePage') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <span class="flex items-center gap-x-3">
                                <i class='bx bx-user-plus text-2xl'></i> Roles & Permissions
                            </span>
                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                        </a>

                        <!-- Dropdown Menu -->
                        <ul x-show="open" x-transition
                            class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md"
                            role="list">
                            <li>
                                <a href="{{ route('rolePage') }}"
                                    class="block p-2 {{ request()->routeIs('rolePage') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Add Role
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block p-2 text-gray-400 hover:text-white">
                                    Assign Permissions
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <div class="mb-2" x-data="{ open: false }">
                    <div class="text-xs font-semibold  text-gray-400">All Users</div>
                    <li
                        class="dropdown relative m-1 {{ request()->routeIs('admin.user') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <!-- Dropdown Toggle -->
                        <a href="#" @click="open = !open"
                            class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('admin.user') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <span class="flex items-center gap-x-3">
                                <i class='bx bx-user-plus text-2xl'></i> User
                                Management
                            </span>
                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                        </a>
                        <!-- Dropdown Menu -->
                        <ul x-show="open" x-transition
                            class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md"
                            role="list">
                            <li>
                                <a href="{{ route('admin.user') }}"
                                    class="block p-2 {{ request()->routeIs('admin.user') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    All Users
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <div class="mb-2" x-data="{ open: false }">
                    <div class="text-xs font-semibold  text-gray-400">Products</div>
                    <li
                        class="dropdown relative m-1 {{ request()->routeIs('product.index', 'category.index', 'category.sub-category', 'brand.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <!-- Dropdown Toggle -->
                        <a href="#" @click="open = !open"
                            class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('product.index', 'category.index', 'category.sub-category', 'brand.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <span class="flex items-center gap-x-3">
                                <i class='bx bxl-product-hunt text-2xl'></i> Product
                                Management
                            </span>
                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                        </a>
                        <!-- Dropdown Menu -->
                        <ul x-show="open" x-transition
                            class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md"
                            role="list">
                            <li>
                                <a href="{{ route('product.index') }}"
                                    class="block p-2 {{ request()->routeIs('product.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('category.index') }}"
                                    class="block p-2 {{ request()->routeIs('category.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Parent Category
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('sub-category.index') }}"
                                    class="block p-2 {{ request()->routeIs('sub-category.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Sub Category
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('brand.index') }}"
                                    class="block p-2 {{ request()->routeIs('brand.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Brands
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <div class="mb-2" x-data="{ open: false }">
                    <div class="text-xs font-semibold  text-gray-400">Orders</div>
                    <li
                        class="dropdown relative m-1 {{ request()->routeIs('order.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <!-- Dropdown Toggle -->
                        <a href="#" @click="open = !open"
                            class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('order.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <span class="flex items-center gap-x-3">
                                <i class='bx bx-sort text-2xl'></i> Order
                                Management
                            </span>
                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                        </a>

                        <!-- Dropdown Menu -->
                        <ul x-show="open" x-transition
                            class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md"
                            role="list">
                            <li>
                                <a href="{{ route('order.index') }}"
                                    class="block p-2 {{ request()->routeIs('order.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    All Orders
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <div class="mb-2" x-data="{ open: false }">
                    <div class="text-xs font-semibold  text-gray-400">Transations</div>
                    <li
                        class="dropdown relative m-1 {{ request()->routeIs('transations') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <!-- Dropdown Toggle -->
                        <a href="#" @click="open = !open"
                            class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('transations') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <span class="flex items-center gap-x-3">
                                <i class="fa-solid fa-money-bill-transfer text-lg"></i> Transations
                            </span>
                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                        </a>
                        <!-- Dropdown Menu -->
                        <ul x-show="open" x-transition
                            class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md"
                            role="list">
                            <li>
                                <a href="{{ route('transations') }}"
                                    class="block p-2 {{ request()->routeIs('transations') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    All Transations
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <div class="mb-2">
                    <div class="text-xs font-semibold  text-gray-400">Contact Form</div>
                    <li
                        class="relative m-1 {{ request()->routeIs('contactform.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <a href="{{ route('contactform.index') }}"
                            class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('contactform.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <i class='bx bxs-contact text-2xl'></i>Contact Forms
                        </a>
                    </li>
                </div>

                <div class="mb-2">
                    <div class="text-xs font-semibold  text-gray-400">Support</div>
                    <li
                        class="relative m-1 {{ request()->routeIs('') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <a href="{{-- {{ route('') }} --}}"
                            class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <i class='bx bx-support text-2xl'></i>Support Ticket
                        </a>
                    </li>
                </div>

                <div class="mb-2">
                    <div class="text-xs font-semibold  text-gray-400">Reviews</div>
                    <li
                        class="relative m-1 {{ request()->routeIs('review.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <a href="{{ route('review.index') }}"
                            class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('review.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <i class='bx bxs-star-half text-2xl'></i>Reviews
                        </a>
                    </li>
                </div>

                <div class="mb-2">
                    <div class="text-xs font-semibold  text-gray-400">Coupons</div>
                    <li
                        class="relative m-1 {{ request()->routeIs('coupon.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <a href="{{ route('coupon.index') }}"
                            class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('coupon.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <i class='bx bxs-coupon text-2xl'></i>All Coupons
                        </a>
                    </li>
                </div>

                <div class="mb-2" x-data="{ open: false }">
                    <div class="text-xs font-semibold  text-gray-400">All Reports</div>
                    <li
                        class="dropdown relative m-1 {{ request()->routeIs('transationPage','salePage','productReports','brandPage') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                        <!-- Dropdown Toggle -->
                        <a href="#" @click="open = !open"
                            class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('transationPage','salePage','productReports','brandPage') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                            <span class="flex items-center gap-x-3">
                                <i class='bx bx-file text-2xl'></i> All
                                Reports
                            </span>
                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                        </a>

                        <!-- Dropdown Menu -->
                        <ul x-show="open" x-transition
                            class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md"
                            role="list">
                            <li>
                                <a href="{{route('transationPage')}}"
                                    class="block p-2 {{ request()->routeIs('transationPage') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Transaction Report
                                </a>
                            </li>
                            <li>
                                <a href="{{route('salePage')}}"
                                    class="block p-2 {{ request()->routeIs('salePage') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Sales Report
                                </a>
                            </li>
                            <li>
                                <a href="{{route('productReports')}}"
                                    class="block p-2 {{ request()->routeIs('productReports') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Product Report
                                </a>
                            </li>
                            <li>
                                <a href="{{route('brandPage')}}"
                                    class="block p-2 {{ request()->routeIs('brandPage') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                    Brand Report
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
</div>
