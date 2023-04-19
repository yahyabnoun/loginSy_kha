<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'name' => 'Yahya',
            'user_type' => 'admin',
            'email' => 'yahya@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'khadija',
            'user_type' => 'admin',
            'email' => 'khadija@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            ] ]
    );
        User::factory()
            ->count(20)
            ->create();
    }
}
