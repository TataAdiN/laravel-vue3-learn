<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate([
            "id" => Str::uuid7(),
            "name" => "Tata Adi Nugroho",
            "email" => "tataa2237@gmail.com",
            "password" => bcrypt("123456"),
        ]);
    }
}
