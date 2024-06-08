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
            'name' => 'Cryon',
            'email' => 'aldow689@gmail.com',
            'phone' => '081359961553',
            'password' => 'akuhebat',
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Users',
            'email' => 'starships129@gmail.com',
            'phone' => '0895340884210',
            'password' => 'hebataku',
            'role' => 'customer'
        ]);

    }
}