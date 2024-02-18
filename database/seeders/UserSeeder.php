<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Super Admin',
                'email' => 'hanz697@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro91lC/.og/at2.uheWG/igi',
                'user_type' => 'admin' //admin is a type og user, not for role
            ],
            [
                'name' => 'John Doe',
                'email' => 'user1@gmail.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro91lC/.og/at2.uheWG/igi',
                'user_type' => 'user' //admin is a type og user, not for role
            ]
        ]);
    }
}
