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
        $depts= [
            [
                'id' => 1,
                'name' => 'Genie Informatique et Systemes Intelligents',
                'slug' => 'genie-informatique-et-systemes-intelligents'
            ],
            [
                'id' => 2,
                'name' => 'Mathematiques Appliquees',
                'slug' => 'mathematiques-appliquees'
            ],
            [
                'id' => 3,
                'name' => 'Chimie Appliquee',
                'slug' => 'chimie-appliquee'
            ],
            [
                'id' => 4,
                'name' => 'Physique Appliquee',
                'slug' => 'physique-appliquee'
            ],
            [
                'id' => 5,
                'name' => 'Sciences de l\'Environnement et Sciences de Vivants',
                'slug' => 'sciences-de-vivants'
            ]
            ];
            DB::table('departments')->insert(
            $depts
        );
    }
}
