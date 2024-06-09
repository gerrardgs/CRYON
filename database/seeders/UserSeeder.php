<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Peri',
            'email' => 'infobfggt@gmail.com',
            'password' => 'constants',
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Ansyah',
            'email' => 'starships129@gmail.com',
            'password' => 'preasure',
            'role' => 'customer'
        ]);
    }
}