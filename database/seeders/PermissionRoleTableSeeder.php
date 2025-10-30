<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_permissions = Permission::all();

        // $agent_permissions = Permission::where('name', 'LIKE', 'ticket_%')->get();
        $trainer_permissions = Permission::whereIn('name', [
            'category_access',
            'category_show',
            'category_edit',
            'category_create',
            'category_delete',
        ])->get();

        $user_permissions = Permission::whereIn('name', [
            'category_access',
            'category_show',
        ])->get();

        $guest_permissions = Permission::whereIn('name', [
            'category_access',
            'category_show',
        ])->get();

        Role::findOrFail(1)->permissions()->sync($admin_permissions);
        Role::findOrFail(2)->permissions()->sync($trainer_permissions);
        Role::findOrFail(3)->permissions()->sync($user_permissions);
        Role::findOrFail(4)->permissions()->sync($guest_permissions);   
    }
}
