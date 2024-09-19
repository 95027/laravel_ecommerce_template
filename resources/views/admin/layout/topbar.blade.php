<div class="bg-white p-3 rounded-sm shadow-lg flex justify-between items-center">
    <div>
        <h1 id="greeting" class="text-2xl font-semibold">Good Morning </h1>
        <p id="dateTime" class="text-xs"></p>
    </div>
    <div class="flex items-center">
        <div class="hs-dropdown relative inline-flex">
            <button id="hs-dropdown-custom-trigger" type="button"
                class="hs-dropdown-toggle py-1 ps-1 pe-1 inline-flex items-center gap-x-2 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50"
                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <img class="w-10 h-auto rounded-full"
                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                    alt="Avatar">
            </button>
            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-1 space-y-0.5 mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-custom-trigger">

                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                    href="#">
                    My Profile
                </a>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button
                        class="w-full flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
