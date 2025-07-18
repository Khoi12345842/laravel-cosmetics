<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@yomail.com',
            'password' => bcrypt(123456),
            'role' => 'Quản trị viên',
        ]);
        \App\Models\Admin::create([
            'name' => 'Admin 2',
            'email' => 'admin2@yomail.com',
            'password' => bcrypt(123456),
            'role' => 'Quản trị viên',
        ]);
    }
}
