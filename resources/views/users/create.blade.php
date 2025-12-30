@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">Add New User</h1>
            <p class="mt-2 text-sm text-zinc-500">Create a new account for a staff member.</p>
        </div>

        <div class="rounded-lg border border-zinc-200 bg-white shadow-sm">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="p-6 space-y-6">
                    <!-- Name & Username -->
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium leading-none text-zinc-950">Full Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                placeholder="e.g. John Doe"
                                class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="username" class="text-sm font-medium leading-none text-zinc-950">Username</label>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                placeholder="e.g. jdoe"
                                class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('username') border-red-500 @enderror">
                            @error('username')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium leading-none text-zinc-950">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                            placeholder="john@csi.co.id"
                            class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role Selection -->
                    <div class="space-y-2">
                        <label for="role_id" class="text-sm font-medium leading-none text-zinc-950">Assign Role</label>
                        <select name="role_id" id="role_id"
                            class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('role_id') border-red-500 @enderror">
                            <option value="">Select a role...</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }} ({{ Str::upper($role->code) }})</option>
                            @endforeach
                        </select>
                        @error('role_id')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="password" class="text-sm font-medium leading-none text-zinc-950">Password</label>
                            <input type="password" name="password" id="password"
                                class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('password') border-red-500 @enderror">
                            @error('password')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="password_confirmation"
                                class="text-sm font-medium leading-none text-zinc-950">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2">
                        </div>
                    </div>

                    <!-- Status Checkbox -->
                    <div class="flex items-start space-x-3 space-y-0 rounded-md border border-zinc-200 p-4">
                        <input id="is_active" name="is_active" type="checkbox" value="1" checked
                            class="h-4 w-4 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-900">
                        <div class="space-y-1 leading-none">
                            <label for="is_active" class="text-sm font-medium leading-none font-semibold text-zinc-950">
                                Active Account
                            </label>
                            <p class="text-sm text-zinc-500">
                                User can login to the system.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="flex items-center justify-end gap-x-4 border-t border-zinc-100 bg-zinc-50/50 px-6 py-4 rounded-b-lg">
                    <a href="{{ route('users.index') }}"
                        class="text-sm font-medium text-zinc-900 hover:text-zinc-700 hover:underline underline-offset-4">Cancel</a>
                    <button type="submit"
                        class="inline-flex h-9 items-center justify-center rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-50 shadow transition-colors hover:bg-zinc-900/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900 disabled:pointer-events-none disabled:opacity-50">
                        Create User
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
