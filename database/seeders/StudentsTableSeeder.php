<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Musa Nuha',
                'email' => 'muusa2002@gmail.com',
                'department' => '053544869476',
            ],
            [
                'name' => ' Esrar Saad',
                'email' => ' esroor1995@outlet.com',
                'department' => '055521454664',
            ],
            [
                'name' => 'Batul Demircioglu',
                'email' => 'Demircioglu0211@gmail.com',
                'department' => '046546444487',
            ],
            [
                'name' => 'Ugur Kaya',
                'email' => 'kingkaya0@gmail.com',
                'department' => '05486428461',
            ],
            [
                'name' => 'Ahmet  Mehmet',
                'email' => 'dontplay4010@outlet.com',
                'department' => '05548556444',
            ],
        ]);


    }
}
