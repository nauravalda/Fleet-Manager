<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Naufal Herdian',
            'email' => 'naufalnau@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Nanang Ismail',
            'email' => 'nanang@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'top-lvl',
        ]);

        User::factory()->create([
            'name' => 'Khansa Kirana',
            'email' => 'khansa@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'mid-lvl',    
        ]);

        User::factory()->create([
            'name' => 'Naura Valda Prameswari',
            'email' => 'nauranaura@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'top-lvl',
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'mid-lvl',
        ]);

        User::factory()->create([
            'name' => 'Budi Setiawan',
            'email' => 'budbud@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Siti Rahayu',
            'email' => 'siti@example.com',
            'password' => hash::make('12345678'),
            'role' => 'mid-lvl',
        ]);

        User::factory()->create([
            'name' => 'Joko Susilo',
            'email' => 'jokojoko@example.com',
            'password' => hash::make('12345678'),
            'role' => 'mid-lvl',
        ]);

        User::factory()->create([
            'name' => 'Joni Sutrisno',
            'email' => 'jonijoni@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'top-lvl',
        ]);


    }

}
