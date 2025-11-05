<x-admin-layout title="Categorias | TECNOPROSA" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Categorias',
        'href' => route('admin.categories.index'),
    ],
    [
        'name' => 'Nuevo',
    ],
]">

    <x-wire-button lime label="Actions" />
    <br>

    Crear nueva categoria

</x-admin-layout>