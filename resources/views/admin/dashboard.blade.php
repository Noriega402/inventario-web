<x-admin-layout title="Dashboard | TECNOPROSA" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pruebas',
    ],
]">

    <x-wire-button lime label="Actions" />
    <br>

    Hola desde la vista de admin

</x-admin-layout>
