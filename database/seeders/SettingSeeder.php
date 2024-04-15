<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_settings = 
        [
            [
                'id'=>1,
                'key' => 'mot-du-doyen',
                'value'=>null,
                'LongValue' => trans('settings.deans-word'),
                'comment'=>'mot de doyen'	
            
            ],
            [
                'id'=>2,
                'key'=> 'students-number',
                'value' => '8000',
                'LongValue'=>null,
                'comment'=> 'Number of students in fac',

            ],
            [
                'id'=>3,
                'key'=> 'majors-number',
                'value' => '9',
                'LongValue'=>null,
                'comment'=> 'filieres',

            ],
            [
                'id'=>4,
                'key'=> 'departments-number',
                'value' => '5',
                'LongValue'=>null,
                'comment'=> 'Number of depts in fac',

            ],
            [
                'id'=>5,
                'key'=> 'staff-number',
                'value' => '70',
                'LongValue'=>null,
                'comment'=> 'Number of staff in fac',

            ],
            [
                'id'=>6,
                'key'=> 'research-structures',
                'value' => '2',
                'LongValue'=>null,
                'comment'=> 'structures de recherche',

            ],
            [
                'id'=>7,

                'key'=> 'professors-number',
                'value' => '70',
                'LongValue'=>null,
                'comment'=> 'Number of professors in fac',

            ],
            [
                'id'=>8,
                'key'=> 'faculty-council',
                'value' => '/media/fc.png',
                'LongValue'=>null,
                'comment'=> 'file containing faculty council code (e.g /settings/dscdc.jpg)',

            ],
            [
                'id'=>9,

                'key'=> 'organigramme',
                'value' => 'settings/org.png',
                'LongValue'=>null,
                'comment'=> 'Organigramme de la page presentation (e.g /settings/org.png',

            ],
            [
                'id'=>10,

                'key'=> 'clubs',
                'value' => '8',
                'LongValue'=>null,
                'comment'=> 'How many clubs',
                
            ],
            [
                'id'=>11,

                'key'=>'color1-gradient',
                'value'=>'#eb3349',
                'LongValue'=>null,
                'comment'=> '',

            ],
            [
                'id'=>12,
                'key'=>'color2-gradient',
                'value'=>'#1fa2ff',
                'LongValue'=>null,
                'comment'=> '',
            ],
            [
                'id'=>13,
                'key'=>'dean-photo',
                'value'=>'settings/dean-photo.jpg',
                'LongValue'=>null,
                'comment'=> '',


            ]

        ];
        DB::table('settings')->insert(
            $default_settings
        );
    }
}
