<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// tambahkan ini
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => 'Admin Sireka',

            'email' => 'admin@gmail.com',

            'password' => bcrypt('password'),

            'role' => 'admin'

        ]);
    }
}