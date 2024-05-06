<?php

namespace Database\Seeders;

use App\Models\Activite;
use App\Models\Club;
use App\Models\Eleve;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Club::factory(10)->create();
        Activite::factory(10)->create();
        Eleve::factory(10)->create();

    }
}
