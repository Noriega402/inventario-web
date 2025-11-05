<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Daniel Noriega',
            'email' => 'd.noriegachajon@gmail.com',
            'password' => bcrypt('kvrn1001$'),
        ]);

        $this->call([
            CategorySeeder::class,
        ]);
    }
}
