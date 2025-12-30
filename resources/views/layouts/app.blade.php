<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-zinc-50 antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mining Operations') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom Scrollbar for a premium feel */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #d4d4d8;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a1a1aa;
        }
    </style>
</head>

<body class="h-full bg-zinc-50 overflow-hidden">
    <!-- Main Full-Screen Flex Container -->
    <div class="flex h-screen w-full overflow-hidden">

        <!-- Sidebar Container (Fixed Width) -->
        <aside class="hidden w-72 flex-shrink-0 flex-col border-r border-zinc-200 bg-white lg:flex">
            @include('layouts.partials.sidebar')
        </aside>

        <!-- Main Content Area (Flex Grow) -->
        <div class="flex flex-1 flex-col overflow-hidden">
            <!-- Navbar (Sticky Top of Content Area) -->
            <header class="flex-shrink-0 border-b border-zinc-200 bg-white z-40">
                @include('layouts.partials.navbar')
            </header>

            <!-- Scrollable Content -->
            <main class="flex-1 overflow-y-auto bg-zinc-50 p-4 sm:p-6 lg:p-8">
                <div class="mx-auto max-w-7xl">
                    @yield('content')
                </div>
            </main>

            <!-- Footer (Static at bottom of scrollable area, or sticky?)
                 Let's make it standard content flow inside main or a shrinkable item.
                 Standard 'admin' footers usually sit at the bottom of the page content.
            -->
            <footer class="flex-shrink-0 border-t border-zinc-200 bg-white py-4">
                @include('layouts.partials.footer')
            </footer>
        </div>
    </div>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('success') }}"
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                Toast.fire({
                    icon: 'error',
                    title: "{{ session('error') }}"
                });
            });
        </script>
    @endif
</body>

</html>
