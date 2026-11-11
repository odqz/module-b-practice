<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $path = database_path('db-seeder.sql');

        $sql = file_get_contents($path);

        $this->call([
            UserSeeder::class,
        ]);

        DB::unprepared($sql);
    }
}
