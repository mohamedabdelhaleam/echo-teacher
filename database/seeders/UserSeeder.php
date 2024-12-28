<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            "name" => "admin",
            "email" => "admin@localhost",
            "is_admin" => true,
            "password" => bcrypt("123456"),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
