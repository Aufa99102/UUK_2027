<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Mimin',
            'email' => 'Admin@example.com',
            'password' => 'password',
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Aufa',
            'email' => 'Aufa@example.com',
            'password' => 'password',
            'role' => 'user',
        ]);

        foreach([
            'Ruang Kelas',
            'Lab',
            'Lapangan',
            'Kamar Mandi',
            'Toilet',  
        ] as $nama){
             Category::create(['nama' => $nama]);
        }
    }
}
