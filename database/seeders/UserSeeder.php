<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('Password1'),
        ]);

        User::create([
            'name' => 'Admin User2',
            'email' => 'admin2@admin.com',
            'password' => Hash::make('Password2'),
        ]);
    }
}
