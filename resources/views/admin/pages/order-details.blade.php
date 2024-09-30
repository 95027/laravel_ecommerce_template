@extends('admin.layout.master')
@section('content')
<div class="mx-auto max-w-7xl mt-2">
    <div class="mx-auto grid max-w-2xl grid-cols-1 grid-rows-1 items-start gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <!-- Invoice summary -->
        <div class="lg:col-start-3 lg:row-end-1">
            <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 pb-6">
                <dl class="flex flex-wrap">
                    <dt class="font-medium text-gray-900 px-6 pt-6 pb-1">Customer Details</dt>
                    <div class="flex w-full flex-none gap-x-4 px-6">
                        <dt class="flex-none">
                            <span class="sr-only">Client</span>
                            <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
                            </svg>
                        </dt>
                        <dd class="text-sm font-medium leading-6 text-gray-900">Alex Curren</dd>
                    </div>
                    <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                        <dt class="flex-none">
                            <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z">
                                </path>
                            </svg>
                        </dt>
                        <dd class="text-sm leading-6 text-gray-500">
                            <a href="tel:" class="hover:text-blue-400"><span>9876543210</span></a>
                        </dd>
                    </div>
                    <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                        <dt class="flex-none">
                            <svg class="h-6 w-5 text-gray-400" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4.7-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z">
                                </path>
                            </svg>
                        </dt>
                        <dd class="text-sm leading-6 text-gray-500"><a href="mailto:alexcurren@gmail.com" class="hover:text-blue-400">alexcurren@gmail.com</a></dd>
                    </div>
                </dl>
                <div class="px-6 pt-4">
                    <dt class="font-medium text-gray-900">Shipping address</dt>
                    <dd class="mt-2 text-gray-700">
                        <address class="not-italic">
                            <span class="block">Kristin Watson</span>
                            <span class="block">7363 Cynthia Pass</span>
                            <span class="block">Toronto, ON N3Y 4H8</span>
                        </address>
                    </dd>
                </div>
                <div class="px-6 pt-4">
                    <dt class="font-medium text-gray-900">Billing address</dt>
                    <dd class="mt-2 text-gray-700">
                        <address class="not-italic">
                            <span class="block">Kristin Watson</span>
                            <span class="block">7363 Cynthia Pass</span>
                            <span class="block">Toronto, ON N3Y 4H8</span>
                        </address>
                    </dd>
                </div>
            </div>
            <div class="mt-5">
                <label class="">Status Update</label>
                <select data-hs-select='{"placeholder": "Status","toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>","toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-4 pe-9 flex gap-x-2 mt-1 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-0","dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700","optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800","optionTemplate": "<div class=\"flex justify-between w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div>"}'>
                    <option value="" hidden>Choose</option>
                    <option value="owner" selected>Pending</option>
                    <option value="manager">Processed</option>
                    <option value="accountent">Cancelled</option>
                </select>
            </div>
        </div>

        <!-- Invoice -->
        <div class="-mx-4 shadow-sm ring-1 ring-gray-900/5 sm:mx-0 sm:rounded-lg sm:px-8 sm:pb-14 lg:col-span-2 lg:row-span-2 lg:row-end-2 xl:pb-20 xl:pt-8 flex flex-col">
            <h2 class="text-base font-semibold leading-6 text-gray-900">Order No. <a href="#" class="text-xl hover:text-blue-400">#123456</a></h2>
            <dl class="flex flex-wrap text-sm leading-6 justify-between items-center">
                <div class="sm:pr-4">
                    <dt class="inline text-gray-500">Order placed on</dt>
                    <dd class="inline text-gray-700"><time datetime="2023-23-01">January 23, 2023</time></dd>
                </div>
                <div class="flex-none self-end">
                    <dt class="sr-only">Status</dt>
                    <dd class="rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-600 ring-1 ring-inset ring-yellow-600/20">
                        Pending</dd>
                </div>
            </dl>
            <table class="mt-4 w-full whitespace-nowrap text-left text-sm leading-6">
                <colgroup>
                    <col class="w-full">
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead class="border-b border-gray-200 text-gray-900">
                    <tr>
                        <th scope="col" class="px-0 py-3 font-semibold">Product</th>
                        <th scope="col" class="hidden py-3 pl-8 pr-0 text-right font-semibold sm:table-cell">
                            Price</th>
                        <th scope="col" class="hidden py-3 pl-8 pr-0 text-right font-semibold sm:table-cell">
                            Quantity</th>
                        <th scope="col" class="py-3 pl-8 pr-0 text-right font-semibold">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-gray-100">
                        <td class="max-w-0 px-0 py-5 align-top">
                            <div class="flex items-center">
                                <div class="h-11 w-11 flex-shrink-0">
                                    <img class="h-11 w-11 rounded-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="truncate font-medium text-gray-900">Logo redesign</div>
                                    <div class="truncate text-gray-500">New logo and digital asset playbook.</div>
                                </div>
                            </div>
                        </td>
                        <td class="hidden py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700 sm:table-cell">
                            20.0</td>
                        <td class="hidden py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700 sm:table-cell">
                            $100.00</td>
                        <td class="py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700">$2,000.00</td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="max-w-0 px-0 py-5 align-top">
                            <div class="flex items-center">
                                <div class="h-11 w-11 flex-shrink-0">
                                    <img class="h-11 w-11 rounded-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="truncate font-medium text-gray-900">Logo redesign</div>
                                    <div class="truncate text-gray-500">New logo and digital asset playbook.</div>
                                </div>
                            </div>
                        </td>
                        <td class="hidden py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700 sm:table-cell">
                            20.0</td>
                        <td class="hidden py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700 sm:table-cell">
                            $100.00</td>
                        <td class="py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700">$2,000.00</td>
                    </tr>
                    <tr class="border-b border-gray-100">
                        <td class="max-w-0 px-0 py-5 align-top">
                            <div class="flex items-center">
                                <div class="h-11 w-11 flex-shrink-0">
                                    <img class="h-11 w-11 rounded-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="truncate font-medium text-gray-900">Logo redesign</div>
                                    <div class="truncate text-gray-500">New logo and digital asset playbook.</div>
                                </div>
                            </div>
                        </td>
                        <td class="hidden py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700 sm:table-cell">
                            20.0</td>
                        <td class="hidden py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700 sm:table-cell">
                            $100.00</td>
                        <td class="py-5 pl-8 pr-0 text-right align-top tabular-nums text-gray-700">$2,000.00</td>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row" class="px-0 pb-0 pt-6 font-normal text-gray-700 sm:hidden">Subtotal
                        </th>
                        <th scope="row" colspan="3" class="hidden px-0 pb-0 pt-6 text-right font-normal text-gray-700 sm:table-cell">
                            Subtotal</th>
                        <td class="pb-0 pl-8 pr-0 pt-6 text-right tabular-nums text-gray-900">$8,800.00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="pt-4 font-normal text-gray-700 sm:hidden">Tax</th>
                        <th scope="row" colspan="3" class="hidden pt-4 text-right font-normal text-gray-700 sm:table-cell">Discount</th>
                        <td class="pb-0 pl-8 pr-0 pt-4 text-right tabular-nums text-gray-900">$1,760.00</td>
                    </tr>
                    <tr>
                        <th scope="row" class="pt-4 font-normal text-gray-700 sm:hidden">Tax</th>
                        <th scope="row" colspan="3" class="hidden pt-4 text-right font-normal text-gray-700 sm:table-cell">Tax (18%)</th>
                        <td class="pb-0 pl-8 pr-0 pt-4 text-right tabular-nums text-gray-900">$1,760.00</td>
                    </tr>

                    <tr>
                        <th scope="row" class="pt-4 font-semibold text-gray-900 sm:hidden">Total</th>
                        <th scope="row" colspan="3" class="hidden pt-4 text-right font-semibold text-gray-900 sm:table-cell">Total</th>
                        <td class="pb-0 pl-8 pr-0 pt-4 text-right font-semibold tabular-nums text-gray-900">
                            $10,560.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="-mx-4 max-w-3xl shadow-sm ring-1 ring-gray-900/5 sm:mx-0 sm:rounded-lg sm:px-8 sm:pb-14 xl:pb-20 xl:pt-8 mt-6">
        <div class="flow-root">
            <ul role="list" class="-mb-8">
                <li>
                    <div class="relative pb-8">
                        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-400 ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-gray-500">Applied to <a href="#" class="font-medium text-gray-900">Front End Developer</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    <time datetime="2020-09-20">Sep 20</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative pb-8">
                        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-500 ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-gray-500">Advanced to phone screening by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    <time datetime="2020-09-22">Sep 22</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative pb-8">
                        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-gray-500">Completed phone screening with <a href="#" class="font-medium text-gray-900">Martha Gardner</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    <time datetime="2020-09-28">Sep 28</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative pb-8">
                        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-500 ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-gray-500">Advanced to interview by <a href="#" class="font-medium text-gray-900">Bethany Blake</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    <time datetime="2020-09-30">Sep 30</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative pb-8">
                        <div class="relative flex space-x-3">
                            <div>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full bg-green-500 ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-gray-500">Completed interview with <a href="#" class="font-medium text-gray-900">Katherine Snyder</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-gray-500">
                                    <time datetime="2020-10-04">Oct 4</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</div>
@endsection
