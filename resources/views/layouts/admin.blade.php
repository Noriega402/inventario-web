@props([
    'title' => config('app.name', 'TECNOPROSA'),
    'breadcrumbs' => [],
])

{{-- Este layout es para las vistas de admin --}}
{{-- Se usa en resources/views/admin/dashboard.blade.php y otras vistas de admin --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- wereui --}}
    <wireui:scripts />

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/314db632b8.js" crossorigin="anonymous"></script>

    {{-- Colocar modo oscuro para dashboard --}}
    <script>
        if (localStorage.getItem('color-theme') === 'dark' ||
            (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">

    @include('layouts.includes.admin.navigation')
    @include('layouts.includes.admin.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="mt-14 flex items-center">
            @include('layouts.includes.admin.breadcrumb')

            @isset($action)
                <div class="ml-auto">
                    {{ $action }}
                </div>
            @endisset
        </div>

        {{ $slot }} <!-- contenido mostrado desde resources/views/admin -->
    </div>

    @stack('modals')

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
