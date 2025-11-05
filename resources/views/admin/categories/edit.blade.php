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
        'name' => 'Editar',
    ],
]">

    <x-wire-button lime label="Actions" />
    <br>

    Editar categoria

</x-admin-layout>