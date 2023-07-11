<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CourseSeeder::class,
            SeasonSeeder::class,
            ClassroomSeeder::class,
        ]);
        \App\Models\Student::factory(1001)->create();
        \App\Models\Teacher::factory(25)->create();
        \App\Models\Lesson::factory(101)->create();
        \App\Models\Registration::factory(2001)->create();
    }
}
