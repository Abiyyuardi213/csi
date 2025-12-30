<div class="flex h-16 items-center justify-between gap-x-4 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
    <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
        <form class="relative flex flex-1" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <div class="relative w-full max-w-md text-zinc-400 focus-within:text-zinc-600">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-0">
                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="search-field"
                    class="block h-full w-full border-0 py-0 pl-8 pr-0 text-zinc-900 placeholder:text-zinc-400 focus:ring-0 sm:text-sm"
                    placeholder="Search data..." type="search" name="search">
            </div>
        </form>
    </div>
    <div class="flex items-center gap-x-4 lg:gap-x-6">
        <!-- Separator -->
        <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-zinc-200" aria-hidden="true"></div>

        <!-- Profile Dropdown (Simplified) -->
        <!-- Profile Dropdown -->
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
            <button @click="open = !open" type="button" class="-m-1.5 flex items-center p-1.5" id="user-menu-button"
                aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <div
                    class="h-8 w-8 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xs font-bold uppercase ring-2 ring-white">
                    {{ substr(auth()->user()->name, 0, 2) }}
                </div>
                <span class="hidden lg:flex lg:items-center">
                    <span class="ml-4 text-sm font-semibold leading-6 text-zinc-900"
                        aria-hidden="true">{{ auth()->user()->name }}</span>
                    <svg class="ml-2 h-5 w-5 text-zinc-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Dropdown menu -->
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-zinc-900/5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                style="display: none;">

                <a href="{{ route('profile.edit') }}"
                    class="block px-3 py-1 text-sm leading-6 text-zinc-900 hover:bg-zinc-50" role="menuitem"
                    tabindex="-1" id="user-menu-item-0">Your Profile</a>

                <!-- Use the sidebar logout form logic here too, or just link to it if we want redundancy,
                     but for consistent behavior usually we keep logout separate or reuse the form logic.
                     For now, let's keep it clean: -->
                <button type="button" onclick="document.getElementById('logout-btn').click()"
                    class="block w-full text-left px-3 py-1 text-sm leading-6 text-zinc-900 hover:bg-zinc-50 hover:text-red-600"
                    role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</button>
            </div>
        </div>
    </div>
</div>
