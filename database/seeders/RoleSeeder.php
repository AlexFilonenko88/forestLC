<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'title' => $role
            ]);
        }

        $user = User::where('email', 'user@mail.ru')->first();
        $role = Role::where('title', 'admin')->first();

        $user->roles()->sync($role->id);
    }
}
