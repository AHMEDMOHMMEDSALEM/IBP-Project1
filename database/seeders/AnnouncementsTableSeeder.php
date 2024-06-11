<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcements = [
            [
                'title' => 'Add 1',
                'content' => 'Welcome to the new academic year!',
                'created_at' => now(),
            ],
            [
                'title' => 'Add 2',
                'content' => 'Midterm exams schedule is now available.',
                'created_at' => now(),
            ],
            [
                'title' => 'Add 3',
                'content' => 'Registration for elective courses is now open.',
                'created_at' => now(),
            ],
            [
                'title' => 'Add 4',
                'content' => 'A guest lecture on AI in education will take place next week.',
                'created_at' => now(),
            ],
            [
                'title' => 'Add 5',
                'content' => 'The annual student conference is accepting submissions.',
                'created_at' => today(),
            ],
        ];

        foreach ($announcements as $announcement) {
            DB::table('announcements')->insert($announcement);
        }
    }
}
