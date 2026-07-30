<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'Administrator')->first();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('123admin'),
            'role_id' => $adminRole->id,
            'is_active' => true,
        ]);
    }
}
