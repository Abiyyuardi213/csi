<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - {{ config('app.name') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="h-full">
    <div class="flex min-h-full">
        <!-- Left Side: Login Form -->
        <div
            class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24 bg-white z-10 w-full lg:w-1/2 max-w-[600px]">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div class="mb-10">
                    <h1 class="text-2xl font-bold tracking-tight text-zinc-900 leading-tight">
                        Welcome back to <br>
                        <span class="text-indigo-600">MiningOps</span>
                    </h1>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">
                        Please enter your details to sign in.
                    </p>
                </div>

                <div class="mt-10">
                    <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Email Input -->
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-zinc-900">Email
                                address</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-zinc-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                        <path
                                            d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                    </svg>
                                </div>
                                <input type="email" name="email" id="email" autocomplete="email" required
                                    value="{{ old('email') }}"
                                    class="block w-full rounded-md border-0 py-3 pl-10 text-zinc-900 ring-1 ring-inset ring-zinc-300 placeholder:text-zinc-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-shadow"
                                    placeholder="admin@csi.co.id">
                            </div>
                            @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Input -->
                        <div>
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-zinc-900">Password</label>
                            <div class="relative mt-2 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-zinc-400" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="password" name="password" id="password" autocomplete="current-password"
                                    required
                                    class="block w-full rounded-md border-0 py-3 pl-10 text-zinc-900 ring-1 ring-inset ring-zinc-300 placeholder:text-zinc-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 transition-shadow"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox"
                                    class="h-4 w-4 rounded border-zinc-300 text-indigo-600 focus:ring-indigo-600 bg-white">
                                <label for="remember-me" class="ml-2 block text-sm leading-6 text-zinc-700">Remember
                                    me</label>
                            </div>

                            <div class="text-sm leading-6">
                                <a href="#"
                                    class="font-semibold text-indigo-600 hover:text-indigo-500 hover:underline">Forgot
                                    password?</a>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-zinc-900 px-3 py-3 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-zinc-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-600 transition-all duration-200">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>

                <div class="mt-10 border-t border-zinc-100 pt-6">
                    <p class="text-xs text-center text-zinc-400">
                        &copy; {{ date('Y') }} PT. Cahaya Smelter Indonesia. <br>
                        Authorized Personnel Only.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side: Image Background -->
        <div class="relative hidden w-0 flex-1 lg:block">
            <!-- Background Image -->
            <!-- Background Image -->
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('image/mining1.jpg') }}"
                alt="Industrial Mining background">

            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-zinc-900/40 mix-blend-multiply transition-opacity hover:opacity-100"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-zinc-900/20 to-transparent opacity-90">
            </div>

            <!-- Overlay Content -->
            <div class="absolute inset-0 flex flex-col justify-end p-12 text-white pb-20">
                <div class="max-w-xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-2 bg-white/10 backdrop-blur-sm rounded-lg border border-white/20">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>
                        </div>
                        <h2 class="text-lg font-bold tracking-wide text-white uppercase opacity-90">MiningOps Enterprise
                        </h2>
                    </div>
                    <blockquote class="text-3xl font-semibold leading-tight text-white tracking-tight">
                        "Efficient resource management driving the future of smelting operations."
                    </blockquote>
                    <div class="mt-6 flex items-center gap-x-4">
                        <div class="h-0.5 w-12 bg-indigo-500"></div>
                        <p class="text-sm font-medium text-zinc-300">Operational Excellence • Safety First</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
