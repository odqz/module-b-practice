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
            'name' => 'Admin User1',
            'email' => 'admin1@admin.com',
            'password' => 'Password1',
        ]);

        User::create([
            'name' => 'Admin User2',
            'email' => 'admin2@admin.com',
            'password' => 'Password2',
        ]);
    }
}
