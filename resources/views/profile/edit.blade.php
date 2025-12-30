@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="mb-8">
            <h1 class="text-2xl font-bold tracking-tight text-zinc-950">My Profile</h1>
            <p class="mt-2 text-sm text-zinc-500">Manage your account settings and preferences.</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-zinc-200 overflow-hidden">
            <div class="p-6 border-b border-zinc-100">
                <div class="flex items-center gap-x-4">
                    <div
                        class="h-16 w-16 rounded-full bg-indigo-600 flex items-center justify-center text-white text-xl font-bold uppercase shadow-inner">
                        {{ substr($user->name, 0, 2) }}
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-zinc-900">{{ $user->name }}</h2>
                        <p class="text-sm text-zinc-500">{{ $user->role->name ?? 'User' }}</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('profile.update') }}" method="POST" class="divide-y divide-zinc-100">
                @csrf
                @method('PATCH')

                <div class="p-6 space-y-6">
                    <!-- Basic Info -->
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium leading-none text-zinc-950">Full Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="username" class="text-sm font-medium leading-none text-zinc-950">Username</label>
                            <input type="text" name="username" id="username"
                                value="{{ old('username', $user->username) }}"
                                class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('username') border-red-500 @enderror">
                            @error('username')
                                <p class="text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="text-sm font-medium leading-none text-zinc-950">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                            class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-xs text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Security -->
                    <div class="pt-2">
                        <h3 class="text-sm font-medium text-zinc-900 mb-4">Security</h3>
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div class="space-y-2">
                                <label for="password" class="text-sm font-medium leading-none text-zinc-950">New
                                    Password</label>
                                <input type="password" name="password" id="password"
                                    placeholder="Leave blank to keep current"
                                    class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2 @error('password') border-red-500 @enderror">
                                @error('password')
                                    <p class="text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <label for="password_confirmation"
                                    class="text-sm font-medium leading-none text-zinc-950">Confirm New Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="flex h-10 w-full rounded-md border border-zinc-200 bg-white px-3 py-2 text-sm placeholder:text-zinc-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-zinc-950 focus-visible:ring-offset-2">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-x-4 bg-zinc-50/50 px-6 py-4">
                    <button type="submit"
                        class="inline-flex h-9 items-center justify-center rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-white shadow transition-colors hover:bg-zinc-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-900">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
