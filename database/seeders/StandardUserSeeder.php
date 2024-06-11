<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StandardUserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'mohamed',
            'email' => 'mohamed21@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'stander',
            'is_admin' => 0,
        ],
        [
            'name' => 'saad',
            'email' => 'saadla@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'stander',
            'is_admin' => 0,

        ],
    ]);

    }
}

