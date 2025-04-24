<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'text' => [
                'fr' => 'LES PROS DE LA COMM DU BENIN rassemble les professionnels de la communication du Bénin. Pour être reconnu comme professionnel de la communication, il convient d’avoir acquis la compétence nécessaire par ses études, ses travaux ou son expérience et d’avoir, pour activité essentielle, apporté ses services à un groupe (collectivité, entreprise), afin d’étudier les problèmes de communication qui se posent à ce groupe, de les résoudre en proposant les solutions nécessaires et en mettant en œuvre les méthodes, voies et moyens convenables pour améliorer la communication tant à l’intérieur qu’à l’extérieur.',
                'en' => 'LES PROS DE LA COMM DU BENIN brings together communication professionals from Benin. To be recognized as a communications professional, one must have acquired the necessary competence through studies, work or experience, and have, as an essential activity, provided services to a group (community, company), in order to study the communication problems facing this group, to solve them by proposing the necessary solutions and by implementing the methods, ways and means suitable for improving communication both internally and externally.',
            ],
            'images' => json_encode([
                'assets/images/brand/about1.jpg',
                'assets/images/brand/about2.jpg',
            ])
        ]);
    }
}
