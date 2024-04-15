<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $depts = [
            [
                'id' => 1,
                'name' => 'Genie Informatique et Systemes Intelligents',
                'slug' => 'genie-informatique-et-systemes-intelligents',
                'translation_key' => "gisi",
                'image' => 'departments/gisi.png'
            ],
            [
                'id' => 2,
                'name' => 'Mathematiques Appliquees',
                'slug' => 'mathematiques-appliquees',
                'translation_key' => "am",
                'image' => 'departments/am.png'


            ],
            [
                'id' => 3,
                'name' => 'Chimie Appliquee',
                'slug' => 'chimie-appliquee',
                'translation_key' => "ac",
                'image' => 'departments/ac.png'


            ],
            [
                'id' => 4,
                'name' => 'Physique Appliquee',
                'slug' => 'physique-appliquee',
                'translation_key' => "ap",
                'image' => 'departments/ap.png'


            ],
            [
                'id' => 5,
                'name' => 'Sciences de l\'Environnement et Sciences de Vivants',
                'slug' => 'sciences-de-vivants',
                'translation_key' => "ls",
                'image' => 'departments/ls.png'


            ]
        ];

        $slides = [

            [
                'slide_title' => "",
                "slide_image" => "slides/slide1.jpg",
                "slide_description" => "Nouvelles Filières dispensées",

            ],
            [
                'slide_title' => "",
                "slide_image" => "slides/slide2.jpg",
                "slide_description" => "Bienvenue à la faculté des sciences appliquées ",

            ],
        ];
        DB::table('departments')->insert(
            $depts
        );

        DB::table('slides')->insert(
            $slides
        );
    }
}
