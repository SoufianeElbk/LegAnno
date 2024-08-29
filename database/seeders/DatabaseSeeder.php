<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'nom' => 'Mohamed',
        //     'email' => 'mohamed@gmail.com',
        //     'password' => bcrypt('mhd'),
        // ]);
        \App\Models\Admin::factory()->create([
            'nom' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        // \App\Models\Manager::factory()->create([
        //     'nom' => 'Omar Kabi',
        //     'email' => 'manager@gmail.com',
        //     'password' => bcrypt('manager'),
        // ]);
    }
}
