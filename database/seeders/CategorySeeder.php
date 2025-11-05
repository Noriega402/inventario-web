<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronicos',
                'description' => 'Dispositivos y gadgets electrónicos'
            ],
            [
                'name' => 'Libros',
                'description' => 'Varios tipos de libros y literatura'
            ],
            [
                'name' => 'Ropa',
                'description' => 'Ropa para hombres, mujeres y niños'
            ],
            [
                'name' => 'Hogar y Cocina',
                'description' => 'Artículos para el hogar y utensilios de cocina'
            ],
            [
                'name' => 'Deportes y Aire Libre',
                'description' => 'Artículos deportivos y equipo al aire libre'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
