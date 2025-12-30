@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Create New Role</h1>
            <p class="mt-2 text-sm text-zinc-500">Define permissions and access levels for a new staff role.</p>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="p-6 space-y-6">
                    <!-- Name Field -->
                    <div class="space-y-2">
                        <label for="name"
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-zinc-950">
                            Role Name
                        </label>
                        <input type="text" name="name" id="name" placeholder="e.g. Site Supervisor"
                            value="{{ old('name') }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50
                           @error('name') border-red-500 focus-visible:ring-red-500 @enderror">
                        @error('name')
                            <p class="text-sm text-red-500 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Code Field -->
                    <div class="space-y-2">
                        <label for="code"
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-zinc-950">
                            Role Code
                        </label>
                        <input type="text" name="code" id="code" placeholder="e.g. site_supervisor"
                            value="{{ old('code') }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm ring-offset-white file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50
                           @error('code') border-red-500 focus-visible:ring-red-500 @enderror">
                        @error('code')
                            <p class="text-sm text-red-500 font-medium">{{ $message }}</p>
                        @else
                            <p class="text-[0.8rem] text-zinc-500">Unique identifier used in code logic. Must be unique.</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div class="space-y-2">
                        <label for="description"
                            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-zinc-950">
                            Description
                        </label>
                        <textarea name="description" id="description" rows="3" placeholder="Describe the responsibilities..."
                            class="flex min-h-[80px] w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm ring-offset-white placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">{{ old('description') }}</textarea>
                    </div>

                    <!-- Status Checkbox -->
                    <div class="flex items-start space-x-3 space-y-0 rounded-md border border-zinc-200 p-4">
                        <input id="is_active" name="is_active" type="checkbox" value="1" checked
                            class="h-4 w-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-900">
                        <div class="space-y-1 leading-none">
                            <label for="is_active" class="text-sm font-medium leading-none font-semibold text-zinc-950">
                                Active Status
                            </label>
                            <p class="text-sm text-zinc-500">
                                Inactive roles cannot be assigned to users.
                            </p>
                        </div>
                    </div>

                </div>

                <div
                    class="flex items-center justify-end gap-x-4 border-t border-zinc-100 bg-zinc-50/50 px-6 py-4 rounded-b-lg">
                    <a href="{{ route('roles.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:text-zinc-700 hover:underline underline-offset-4">Cancel</a>
                    <button type="submit"
                        class="inline-flex h-9 items-center justify-center rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-50 shadow transition-colors hover:bg-zinc-900/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900 disabled:pointer-events-none disabled:opacity-50">
                        Create Role
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
