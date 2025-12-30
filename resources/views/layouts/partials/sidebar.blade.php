<div class="flex h-full flex-col">
    <!-- Logo Area -->
    <div class="flex h-16 shrink-0 items-center px-6 border-b border-zinc-100">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-zinc-900 leading-none">Mining<span
                    class="text-indigo-600">Ops</span></h1>
            <p class="text-xs font-medium text-zinc-500 mt-1">PT. Cahaya Smelter Indonesia</p>
        </div>
    </div>

    <!-- Navigation Area -->
    <div class="flex flex-1 flex-col overflow-y-auto px-6 py-4">
        <nav class="flex-1 space-y-1">
            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                <li>
                    <div class="text-xs font-semibold leading-6 text-zinc-400">General</div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('dashboard') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <svg class="h-6 w-6 shrink-0 {{ request()->routeIs('dashboard') ? 'text-indigo-600' : 'text-zinc-400 group-hover:text-indigo-600' }}"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="text-xs font-semibold leading-6 text-zinc-400">Master Data</div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li>
                            <a href="{{ route('locations.index') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('locations.*') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-200 bg-white text-[0.625rem] font-medium text-zinc-400 group-hover:border-indigo-600 group-hover:text-indigo-600">L</span>
                                <span class="truncate">Master Locations</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('equipment.index') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('equipment.*') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-200 bg-white text-[0.625rem] font-medium text-zinc-400 group-hover:border-indigo-600 group-hover:text-indigo-600">E</span>
                                <span class="truncate">Master Equipment</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('materials.index') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('materials.*') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-200 bg-white text-[0.625rem] font-medium text-zinc-400 group-hover:border-indigo-600 group-hover:text-indigo-600">M</span>
                                <span class="truncate">Master Material</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employees.index') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('employees.*') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <span
                                    class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-zinc-200 bg-white text-[0.625rem] font-medium text-zinc-400 group-hover:border-indigo-600 group-hover:text-indigo-600">K</span>
                                <span class="truncate">Master Karyawan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="text-xs font-semibold leading-6 text-zinc-400">System Administration</div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li>
                            <a href="{{ route('roles.index') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('roles.*') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <svg class="h-6 w-6 shrink-0 {{ request()->routeIs('roles.*') ? 'text-indigo-600' : 'text-zinc-400 group-hover:text-indigo-600' }}"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                Roles & Permissions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 {{ request()->routeIs('users.*') ? 'bg-zinc-100 text-indigo-600' : 'text-zinc-700 hover:bg-zinc-50 hover:text-indigo-600' }}">
                                <svg class="h-6 w-6 shrink-0 {{ request()->routeIs('users.*') ? 'text-indigo-600' : 'text-zinc-400 group-hover:text-indigo-600' }}"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                                Users Management
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="mt-auto border-t border-zinc-100 pt-4">
            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                @csrf
                <button type="button" id="logout-btn"
                    class="group flex w-full gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-zinc-700 hover:bg-zinc-50 hover:text-red-600 transition-colors">
                    <svg class="h-6 w-6 shrink-0 text-zinc-400 group-hover:text-red-600" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12" />
                    </svg>
                    Logout System
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const logoutBtn = document.getElementById('logout-btn');
        const logoutForm = document.getElementById('logout-form');

        if (logoutBtn && logoutForm) {
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Sign Out?',
                    text: "Are you sure you want to end your session?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#18181b', // zinc-900
                    cancelButtonColor: '#f4f4f5', // zinc-100
                    confirmButtonText: 'Yes, Sign Out',
                    cancelButtonText: 'Cancel',
                    customClass: {
                        cancelButton: '!text-zinc-900',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        logoutForm.submit();
                    }
                });
            });
        }
    });
</script>
