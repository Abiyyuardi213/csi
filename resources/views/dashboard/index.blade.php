@extends('layouts.app')

@section('content')
    <div>
        <h3 class="text-base font-semibold leading-6 text-zinc-900">Operational Overview</h3>

        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-zinc-500">Total Excavation</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-zinc-900">71,897 <span
                        class="text-sm font-normal text-zinc-400">tons</span></dd>
            </div>
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-zinc-500">Active Trucks</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-zinc-900">12 <span
                        class="text-sm font-normal text-zinc-400">/ 15</span></dd>
            </div>
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-zinc-500">Fuel Consumption</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-zinc-900">2,450 <span
                        class="text-sm font-normal text-zinc-400">L</span></dd>
            </div>
            <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                <dt class="truncate text-sm font-medium text-zinc-500">Safety Incidents</dt>
                <dd class="mt-1 text-3xl font-semibold tracking-tight text-green-600">0 <span
                        class="text-sm font-normal text-zinc-400">this month</span></dd>
            </div>
        </dl>
    </div>

    <div class="mt-8">
        <h3 class="text-base font-semibold leading-6 text-zinc-900">Recent Activities</h3>
        <div class="mt-4 flow-root">
            <ul role="list" class="-mb-8">
                <li>
                    <div class="relative pb-8">
                        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-zinc-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
                                <span
                                    class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-zinc-500">Shift changeover initiated by <a href="#"
                                            class="font-medium text-zinc-900">Supervisor A</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-zinc-500">
                                    <time datetime="2023-09-20">1h ago</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative pb-8">
                        <span class="absolute left-4 top-4 -ml-px h-full w-0.5 bg-zinc-200" aria-hidden="true"></span>
                        <div class="relative flex space-x-3">
                            <div>
                                <span
                                    class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-zinc-500">Daily safety check completed for <a href="#"
                                            class="font-medium text-zinc-900">Sector 4</a></p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-zinc-500">
                                    <time datetime="2023-09-20">3h ago</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative pb-8">
                        <div class="relative flex space-x-3">
                            <div>
                                <span
                                    class="h-8 w-8 rounded-full bg-red-500 flex items-center justify-center ring-8 ring-white">
                                    <svg class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </div>
                            <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
                                <div>
                                    <p class="text-sm text-zinc-500">Maintenance alert: <a href="#"
                                            class="font-medium text-zinc-900">Excavator #04</a> hydraulic pressure low</p>
                                </div>
                                <div class="whitespace-nowrap text-right text-sm text-zinc-500">
                                    <time datetime="2023-09-20">5h ago</time>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
