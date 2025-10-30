<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => Role::ROLES['Admin'],
            ],
            [
                'id' => 2,
                'name' => Role::ROLES['Trainer'],
            ],
            [
                'id' => 3,
                'name' => Role::ROLES['User'],
            ],
            [
                'id' => 4,
                'name' => Role::ROLES['Guest'],
            ],
        ];

        Role::insert($roles);
    }
}
