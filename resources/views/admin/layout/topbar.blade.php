<div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
    <div x-data="{ open: false }">
        <!-- Toggle button for sidebar -->
        <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="open = true">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true" x-show="open" @click.away="open = false">
            <div class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>
            <div class="fixed inset-0 flex">
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button type="button" class="-m-2.5 p-2.5" @click="open = false">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-6 pb-4 ring-1 ring-white/10">
                        <div class="flex h-16 shrink-0 items-center">
                            <img class="h-8 w-auto" src="{{ asset('assets/admin/images/logo/logo2.png') }}" alt="Your Company">
                            <h1 class="text-3xl ms-2 font-bold text-white">Ecommerce</h1>
                        </div>
                        <nav class="flex flex-1 flex-col overflow-y-scroll sidebarScroll">
                            <ul role="list" class="flex flex-1 flex-col -mx-0 space-y-1">
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Dashboard</div>
                                    @role('admin')
                                    <li class="relative m-1 {{ request()->routeIs('admin.dashboard') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('admin.dashboard') }}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bxs-dashboard text-2xl'></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    @else
                                    <li class="relative m-1 {{ request()->routeIs('employee.dashboard') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('employee.dashboard') }}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('employee.dashboard') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bxs-dashboard text-2xl'></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    @endrole
                                </div>

                                @can('employee management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">All Employees</div>
                                    <li class="relative m-1 {{ request()->routeIs('employee.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('employee.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold  {{ request()->routeIs('employee.index') ? 'text-white' : 'text-gray-400 hover:text-white' }} ">
                                            <i class="fa-solid fa-users text-lg"></i>
                                            All Employees
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('role management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Roles & Permissions</div>
                                    <li class="relative m-1 {{ request()->routeIs('employee.role.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('employee.role.index') }}" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold  {{ request()->routeIs('employee.role.index') ? 'text-white' : 'text-gray-400 hover:text-white' }} ">
                                            <i class='bx bx-user-plus text-2xl'></i>
                                            Roles & Permissions
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('user management')
                                <div class="mb-2" x-data="{ open: false }">
                                    <div class="text-xs font-semibold  text-gray-400">All Users</div>
                                    <li class="dropdown relative m-1 {{ request()->routeIs('admin.user') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <!-- Dropdown Toggle -->
                                        <a href="#" @click="open = !open" class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('admin.user') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <span class="flex items-center gap-x-3">
                                                <i class='bx bx-user-plus text-2xl'></i> User
                                                Management
                                            </span>
                                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                                        </a>
                                        <!-- Dropdown Menu -->
                                        <ul x-show="open" x-transition class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md" role="list">
                                            <li>
                                                <a href="{{ route('admin.user') }}" class="block p-2 {{ request()->routeIs('admin.user') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    All Users
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                @endcan

                                @can('product management')
                                <div class="mb-2" x-data="{ open: false }">
                                    <div class="text-xs font-semibold  text-gray-400">Products</div>
                                    <li class="dropdown relative m-1 {{ request()->routeIs('product.index', 'category.index', 'category.sub-category', 'brand.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <!-- Dropdown Toggle -->
                                        <a href="#" @click="open = !open" class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('product.index', 'category.index', 'category.sub-category', 'brand.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <span class="flex items-center gap-x-3">
                                                <i class='bx bxl-product-hunt text-2xl'></i> Product
                                                Management
                                            </span>
                                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                                        </a>
                                        <!-- Dropdown Menu -->
                                        <ul x-show="open" x-transition class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md" role="list">
                                            <li>
                                                <a href="{{ route('product.index') }}" class="block p-2 {{ request()->routeIs('product.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Products
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('category.index') }}" class="block p-2 {{ request()->routeIs('category.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Parent Category
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('sub-category.index') }}" class="block p-2 {{ request()->routeIs('sub-category.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Sub Category
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('brand.index') }}" class="block p-2 {{ request()->routeIs('brand.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Brands
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                @endcan

                                @can('order management')
                                <div class="mb-2" x-data="{ open: false }">
                                    <div class="text-xs font-semibold  text-gray-400">Orders</div>
                                    <li class="dropdown relative m-1 {{ request()->routeIs('order.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <!-- Dropdown Toggle -->
                                        <a href="#" @click="open = !open" class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('order.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <span class="flex items-center gap-x-3">
                                                <i class='bx bx-sort text-2xl'></i> Order
                                                Management
                                            </span>
                                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                                        </a>

                                        <!-- Dropdown Menu -->
                                        <ul x-show="open" x-transition class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md" role="list">
                                            <li>
                                                <a href="{{ route('order.index') }}" class="block p-2 {{ request()->routeIs('order.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    All Orders
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                @endcan

                                @can('transaction management')
                                <div class="mb-2" x-data="{ open: false }">
                                    <div class="text-xs font-semibold  text-gray-400">Transations</div>
                                    <li class="dropdown relative m-1 {{ request()->routeIs('transations') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <!-- Dropdown Toggle -->
                                        <a href="#" @click="open = !open" class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('transations') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <span class="flex items-center gap-x-3">
                                                <i class="fa-solid fa-money-bill-transfer text-lg"></i> Transations
                                            </span>
                                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                                        </a>
                                        <!-- Dropdown Menu -->
                                        <ul x-show="open" x-transition class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md" role="list">
                                            <li>
                                                <a href="{{ route('transations') }}" class="block p-2 {{ request()->routeIs('transations') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    All Transations
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                @endcan

                                @can('slider management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Slider Images </div>
                                    <li class="relative m-1 {{ request()->routeIs('sliderImage.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('sliderImage.index') }}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('sliderImage.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bxs-star-half text-2xl'></i>Sliders
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('contact management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Contact Form</div>
                                    <li class="relative m-1 {{ request()->routeIs('contactform.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('contactform.index') }}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('contactform.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bxs-contact text-2xl'></i>Contact Forms
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('support management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Support</div>
                                    <li class="relative m-1 {{ request()->routeIs('') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{-- {{ route('') }} --}}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bx-support text-2xl'></i>Support Ticket
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('reviews management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Reviews</div>
                                    <li class="relative m-1 {{ request()->routeIs('review.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('review.index') }}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('review.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bxs-star-half text-2xl'></i>Reviews
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('coupon management')
                                <div class="mb-2">
                                    <div class="text-xs font-semibold  text-gray-400">Coupons</div>
                                    <li class="relative m-1 {{ request()->routeIs('coupon.index') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <a href="{{ route('coupon.index') }}" class="group flex gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('coupon.index') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <i class='bx bxs-coupon text-2xl'></i>All Coupons
                                        </a>
                                    </li>
                                </div>
                                @endcan

                                @can('report management')
                                <div class="mb-2" x-data="{ open: false }">
                                    <div class="text-xs font-semibold  text-gray-400">All Reports</div>
                                    <li class="dropdown relative m-1 {{ request()->routeIs('report.brand', 'report.transaction', 'report.sales', 'report.product') ? 'rounded-br-md rounded-se-md bg-gray-800 text-white shadow-2xl font-bold active-tab' : 'text-gray-400' }}">
                                        <!-- Dropdown Toggle -->
                                        <a href="#" @click="open = !open" class="dropdown-toggle group flex justify-between items-center gap-x-3 p-2 text-sm font-semibold  {{ request()->routeIs('report.transaction', 'report.sales', 'report.product', 'report.brand') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                            <span class="flex items-center gap-x-3">
                                                <i class='bx bx-file text-2xl'></i> All
                                                Reports
                                            </span>
                                            <i class='bx' :class="open ? 'bx-minus' : 'bx-plus'"></i>
                                        </a>

                                        <!-- Dropdown Menu -->
                                        <ul x-show="open" x-transition class="dropdown-menu mt-2 marker:text-white list-disc bg-gray-800 p-2 rounded-md" role="list">
                                            <li>
                                                <a href="{{ route('report.transaction') }}" class="block p-2 {{ request()->routeIs('report.transaction') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Transaction Report
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('report.sales') }}" class="block p-2 {{ request()->routeIs('report.sales') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Sales Report
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('report.product') }}" class="block p-2 {{ request()->routeIs('report.product') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Product Report
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('report.brand') }}" class="block p-2 {{ request()->routeIs('report.brand') ? 'text-white' : 'text-gray-400 hover:text-white' }}">
                                                    Brand Report
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                                @endcan
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true"></div>

    <div class="flex items-center flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <form class="relative flex flex-1" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <input id="search-field" class="block h-full py-3 w-full border-0 pl-8 pr-0 text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-0 sm:text-sm" placeholder="Search..." type="search" name="search">
        </form>

        <div>
            <h5 id="greeting" class="text-lg font-semibold"></h5>
            <p id="dateTime" class="text-xs"></p>
        </div>
        <div>
            <button type="button" class="relative inline-flex justify-center items-center size-[46px] text-sm font-semibold rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                </svg>
                <span class="flex absolute top-2 end-1 size-3 -mt-1.5 -me-1.5">
                    <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full size-3 bg-red-500"></span>
                </span>
            </button>
        </div>
        <div class="flex items-center gap-x-4 lg:gap-x-6">
            <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-900/10" aria-hidden="true"></div>
            <div class="relative" x-data="{ open: false }">
                <button type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button" @click="open = !open" aria-expanded="false" aria-haspopup="true">
                    <img class="h-8 w-8 rounded-full bg-gray-50" src="{{ auth()->user()->profile_image ?? 'https://picsum.photos/200' }}" alt="User Avatar">
                    <span class="hidden lg:flex lg:items-center">
                        <span class="ml-4 text-sm font-semibold leading-6 text-gray-900" aria-hidden="true">
                            {{ auth()->user()?->name }}</span>
                        <svg class="ml-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
                <div x-show="open" @click.outside="open = false" class="absolute right-0 z-10 mt-2.5 w-44 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <a href="{{ route('profile-page') }}" class="block px-3 py-1 text-sm leading-6 text-gray-900 hover:bg-gray-100 " role="menuitem" tabindex="-1" id="user-menu-item-0">Your profile</a>
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
