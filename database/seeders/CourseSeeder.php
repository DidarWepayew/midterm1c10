<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'C1-MsOffice,MsWindows',
            'C2-Photoshop,Coreldraw',
            'C3-AutoCad,',
            'C4-Autodesk 3dsmax',
            'C5-Python',
            'C9-Web design',
            'C10-Web Programming',
            'C11-Laravel(Advanced)',
            'English-Beginner',
            'English-Elementary',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = $course;
            $obj->save();
        }
    }
}
