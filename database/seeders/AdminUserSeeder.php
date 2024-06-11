<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ALI',
            'email' => 'ALI@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678ALI'),
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin',
            'is_admin' => 1,
        ]);
    }

}

