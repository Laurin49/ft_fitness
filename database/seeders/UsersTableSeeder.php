<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@hsv.de',
                'password' => bcrypt('hsv1887tv'),
                'remember_token' => null,
            ],
            [
                'name' => 'Polzin',
                'email' => 'polzin@hsv.de',
                'password' => bcrypt('hsv1887tv'),
                'remember_token' => null,
            ],
            [
                'name' => 'Elfadli',
                'email' => 'elfadli@hsv.de',
                'password' => bcrypt('hsv1887tv'),
                'remember_token' => null,
            ],
            [
                'name' => 'Dirk',
                'email' => 'dirk@hsv.de',
                'password' => bcrypt('hsv1887tv'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
