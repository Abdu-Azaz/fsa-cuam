<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors =
            [
                [
                    'label' => 'IA',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'BCG',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'PC',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'MIP',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Ingénieurie Mathématique',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Analytique des données',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Systèmes Informatiques Embarqués',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Sciences des matériaux et Sciences de l\'eau',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Chimie Appliquée',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Biologie Appliquée aux PhytoResources',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Biotechnologies Appliquées à la prodution Animale',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Génie des Technologies Industrielles',
                    'diploma' => 'Licence ST'
                ],
                [
                    'label' => 'Génie Thermique et Efficacité Energétique',
                    'diploma' => 'Licence ST'
                ],

            ];
        DB::table('majors')->insert(
            $majors
        );
    }
}


