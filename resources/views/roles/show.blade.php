@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-3xl">
        <div class="mb-8 flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Role Details</h1>
                <p class="mt-2 text-sm text-zinc-500">View complete information for this role.</p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('roles.index') }}"
                    class="inline-flex h-9 items-center justify-center rounded-md border border-zinc-200 bg-white px-4 py-2 text-sm font-medium text-zinc-900 shadow-sm hover:bg-zinc-100 hover:text-zinc-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950">
                    Back to List
                </a>
                <a href="{{ route('roles.edit', $role->id) }}"
                    class="inline-flex h-9 items-center justify-center rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-50 shadow hover:bg-zinc-900/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950">
                    Edit Role
                </a>
            </div>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b border-zinc-100 bg-zinc-50/50">
                <h3 class="text-base font-semibold leading-7 text-zinc-900">General Information</h3>
            </div>
            <div class="px-6 py-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Role Name</dt>
                        <dd class="mt-1 text-sm leading-6 text-zinc-900 font-medium">{{ $role->name }}</dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Code</dt>
                        <dd class="mt-1 text-sm leading-6 flex">
                            <span
                                class="inline-flex items-center rounded-md bg-zinc-100 px-2 py-1 text-xs font-medium text-zinc-700 ring-1 ring-inset ring-zinc-600/10 font-mono">
                                {{ $role->code }}
                            </span>
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Status</dt>
                        <dd class="mt-1 text-sm leading-6">
                            @if ($role->is_active)
                                <span
                                    class="inline-flex items-center rounded-full bg-emerald-50 px-2.5 py-0.5 text-xs font-semibold text-emerald-700 ring-1 ring-inset ring-emerald-600/20">Active</span>
                            @else
                                <span
                                    class="inline-flex items-center rounded-full bg-zinc-100 px-2.5 py-0.5 text-xs font-medium text-zinc-700 ring-1 ring-inset ring-zinc-500/20">Inactive</span>
                            @endif
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Guard Name</dt>
                        <dd class="mt-1 text-sm leading-6 text-zinc-900">{{ $role->guard_name }}</dd>
                    </div>
                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Description</dt>
                        <dd class="mt-1 text-sm leading-6 text-zinc-700 border rounded-md p-3 bg-zinc-50/30">
                            {{ $role->description ?? 'No description provided.' }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Created At</dt>
                        <dd class="mt-1 text-sm leading-6 text-zinc-900">{{ $role->created_at->format('F j, Y, g:i a') }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium leading-6 text-zinc-500">Last Updated</dt>
                        <dd class="mt-1 text-sm leading-6 text-zinc-900">{{ $role->updated_at->format('F j, Y, g:i a') }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
