<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'key' => 'mot-du-doyen',
                'longValue' => 'La Faculté des Sciences
                Appliquées-Ait Melloul de l\'Université Ibn Zohr, FSA, est le premier établissement marocain dédié
                aux sciences appliquées et leurs interactions socio-économiques. Une particularité qui inscrit notre
                projet de développement dans le cadre de la vision stratégique de l\'enseignement supérieur au Maroc.
                Crée par le bulletin officiel N° 6789 de 24 Juin 2019 (20 Choual 1440), la FSA vise à répondre aux
                besoins et aux exigences du marché de l\'emploi à l\'échelle régionale et à l\'échelle nationale. <br>
                La Faculté des Sciences Appliquées, pilier du grand Campus Universitaire d\'Ait Melloul, demeure une
                source d\'enseignements, de formations, de recherche scientifique et de l\'innovation. En effet, une
                panoplie de filières scientifiques et techniques issues de la Physique Appliquée, de la Chimie
                Appliquées, des Sciences de Vie et de l\'Informatique.<br><br>Vu son emplacement géographique
                stratégique au sud du Maroc, la Faculté des Sciences Appliquées participe à la création d\'une
                synergie active et à la promotion de la formation appliquée et académique en intégrant toutes les
                parties prenantes et tous les opérateurs concernés. Pertinence, Excellence, Créativité, Polyvalence
                et Endurance sont les cinq devises de la jeune Faculté pour assurer un processus de qualité sur les
                niveaux académique, scientifique, administratif et gestionnaire.<br><br>Sur le plan académique, le
                staff administratif et pédagogique de la faculté se dévoue sans compter pour garantir un
                enseignement et/ou un encadrement de haute gamme. "Un étudiant épanoui est un bon futur citoyen"
                reste la mission de la FSA qui propose plusieurs actions d\'accompagnement et favorise le
                renforcement de la personnalité estudiantine via la promotion des Sofs-Skills et des ouvertures
                socio-cultuelles. La FSA focalise ses efforts et oriente ses ressources afin de mettre en œuvre les
                grands chantiers initiés par le Ministère de tutelle à savoir la promotion de la pédagogie
                numérique, de la recherche scientifique et de l\'innovation.<br><br> Un des futurs challenges de la
                FSA serait de créer /multiplier les partenariats et de renforcer les coopérations. C\'est ainsi que
                la FSA entend se maintenir dans la ligne de l\'excellence tracée par ses fondateurs pour remplir
                pleinement sa responsabilité sociale envers la région Souss-Massa et le Maroc tout entier.`<br><br>
                Le Doyen, le corps professoral et administratif et les étudiants de la Faculté des Sciences
                Appliquées ont le plaisir de participer au rayonnement universitaire marocain. Bienvenue à la
                Faculté des Sciences Appliquées… Bienvenue à la Faculté de Demain'	
            ],
            [
                'key'=> 'students-number',
                'comment'=> 'Number of students in fac',
                'value' => '8000'
            ],
            [
                'key'=> 'majors-number',
                'comment'=> 'filieres',
                'value' => '9'
            ],
            [
                'key'=> 'departments-number',
                'comment'=> 'Number of depts in fac',
                'value' => '5'
            ],
            [
                'key'=> 'staff-number',
                'comment'=> 'Number of staff in fac',
                'value' => '70'
            ],
            [
                'key'=> 'research-structures',
                'comment'=> 'structures de recherche',
                'value' => '2'
            ],
            [
                'key'=> 'professors-number',
                'comment'=> 'Number of professors in fac',
                'value' => '70'
            ],
            [
                'key'=> 'faculty-council',
                'comment'=> 'file containing faculty council code (e.g /settings/dscdc.jpg)',
                'value' => '/media/fc.png'
            ],
            [
                'key'=> 'organigramme',
                'comment'=> 'Organigramme de la page presentation (e.g /settings/org.png',
                'value' => '/settings/org.png'
            ],
            [
                'key'=> 'clubs',
                'comment'=> 'How many clubs',
                'value' => '8'
            ],

        ];
    }
}
