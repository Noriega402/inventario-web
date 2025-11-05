@php
    $links = [
        [
            'icon' => 'fas fa-tachometer-alt',
            'label' => 'Dashboard',
            'href' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
        ],
        [
            'header' => 'Administrar página',
        ],
        [
            'icon' => 'fas fa-tags',
            'label' => 'Categorías',
            'href' => route('admin.categories.index'),
            'active' => request()->routeIs('admin.categories.*'),
        ],
        [
            'icon' => 'fas fa-users',
            'label' => 'Usuarios',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'icon' => 'fas fa-boxes',
            'label' => 'Productos',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'icon' => 'fas fa-warehouse',
            'label' => 'Almacenes',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'icon' => 'fas fa-truck',
            'label' => 'Proveedores',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'icon' => 'fas fa-shopping-cart',
            'label' => 'Compras',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'icon' => 'fas fa-file-invoice-dollar',
            'label' => 'Ventas',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'icon' => 'fas fa-chart-bar',
            'label' => 'Reportes',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
        [
            'header' => 'Configuraciones',
        ],
        [
            'icon' => 'fas fa-cogs',
            'label' => 'Configuraciones',
            'href' => route('admin.dashboard'),
            'active' => false,
        ],
    ];
@endphp

<aside id="logo-sidebar"
    class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-white pt-20 transition-transform sm:translate-x-0 dark:border-gray-700 dark:bg-gray-800"
    aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-white px-3 pb-4 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                <li>
                    @isset($link['header'])
                        <div class="px-2 py-2 text-sm font-semibold uppercase text-gray-500 dark:text-white">
                            {{ $link['header'] }}
                        </div>
                    @else
                        <a href="{{ $link['href'] }}"
                            class="{{ $link['active'] ? 'bg-gray-100 dark:bg-gray-700' : '' }} group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            <span
                                class="inline-flex h-6 w-6 items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-700">
                                <i class="{{ $link['icon'] }} text-gray-500 dark:text-gray-400"></i>
                            </span>
                            <span class="ms-3">{{ $link['label'] }}</span>
                        </a>
                    @endisset
                </li>
            @endforeach
        </ul>
    </div>
</aside>
