<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::Create([
            'name' => 'Rafiq Firmansyah',
            'nip' => '123',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);

        \App\Models\User::Create([
            'name' => 'Yoga',
            'nip' => '1234',
            'password' => bcrypt('123456'),
            'role' => 'admin',
        ]);
    }
}
