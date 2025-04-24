<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = [
            [
                "name" => "T. Olafemiwa OKANLA DIOMANDÉ",
                "image" => "assets/images/faces/face8.jpg",
                "role" => [
                    "fr" => "Présidente",
                    "en" => "President",
                ],
                "profession" => [
                    "fr" => "Fondatrice & Associée Gérante IDEEO AFRICA",
                    "en" => "Founder & Managing Partner IDEEO AFRICA",
                ],
                "created_at" => now(),
            ],
            [
                "name" => "S. K. Jean YENA",
                "image" => "assets/images/faces/face5.jpeg",
                "role" => [
                    "fr" => "Vice-Président",
                    "en" => "Vice-President",
                ],
                "profession" => [
                    "fr" => "Directeur Commercial et Marketing Sofitel Cotonou Marina",
                    "en" => "Sales and Marketing Director Sofitel Cotonou Marina",
                ],
                "created_at" => now()->addSeconds(5),
            ],
            [
                "name" => "A. Reece-Hermine ADANWENON",
                "image" => "assets/images/faces/face7.jpg",
                "role" => [
                    "fr" => "Sécrétaire Générale",
                    "en" => "Secretary General",
                ],
                "profession" => [
                    "fr" => "Responsable Communication Enabel Bénin",
                    "en" => "Head of Communication, Enabel Benin",
                ],
                "created_at" => now()->addSeconds(10),
            ],
            [
                "name" => "A. Régina-Laetitia VIGAN",
                "image" => "assets/images/faces/face14.jpg",
                "role" => [
                    "fr" => "Sécrétaire Générale Adjointe",
                    "en" => "Deputy Secretary General",
                ],
                "profession" => [
                    "fr" => "Consultante en Communication Institutionnelle Relations Publiques",
                    "en" => "Consultant in Institutional Communication and Public Relations",
                ],
                "created_at" => now()->addSeconds(15),
            ],
            [
                "name" => "G. Moulikath AYEDOUN",
                "image" => "assets/images/faces/face12.jpeg",
                "role" => [
                    "fr" => "Trésorière Générale",
                    "en" => "General Treasurer",
                ],
                "profession" => [
                    "fr" => "Directrice Générale ORIA GROUP",
                    "en" => "CEO of ORIA GROUP",
                ],
                "created_at" => now()->addSeconds(20),
            ],
            [
                "name" => "A. Clémence Mylène A. AMEGNIKOU",
                "image" => "assets/images/faces/face11.jpeg",
                "role" => [
                    "fr" => "Trésorière Générale Adjointe",
                    "en" => "Deputy General Treasurer",
                ],
                "profession" => [
                    "fr" => "Coordinatrice pôle artistique et communication Le Centre Bénin",
                    "en" => "Coordinator of the Arts and Communication Division, Le Centre Benin",
                ],
                "created_at" => now()->addSeconds(25),
            ],
            [
                "name" => "Christelle GNIDEHOUE",
                "image" => "assets/images/faces/face13.jpeg",
                "role" => [
                    "fr" => "Vice-Présidente Affaires Sociétales",
                    "en" => "Vice President of Social Affairs",
                ],
                "profession" => [
                    "fr" => "Cheffe de la Division Communication et Marketing CDCB",
                    "en" => "Head of Communication and Marketing Division, CDCB",
                ],
                "created_at" => now()->addSeconds(30),
            ],
            [
                "name" => "S. Charles AMOUSSOU",
                "image" => "assets/images/faces/face10.jpeg",
                "role" => [
                    "fr" => "Vice-Président Communication",
                    "en" => "Vice President of Communication",
                ],
                "profession" => [
                    "fr" => "Directeur Général STUDIO QUICK",
                    "en" => "CEO of STUDIO QUICK",
                ],
                "created_at" => now()->addSeconds(35),
            ],
            [
                "name" => "M. Firmin TOVODOUNON",
                "image" => "assets/images/faces/face6.jpg",
                "role" => [
                    "fr" => "Vice-Président Formation",
                    "en" => "Vice President of Training",
                ],
                "profession" => [
                    "fr" => "Directeur Général Groupe EIG",
                    "en" => "CEO of Groupe EIG",
                ],
                "created_at" => now()->addSeconds(40),
            ],
            [
                "name" => "M. O. Murielle A. NOUNAWON",
                "image" => "assets/images/faces/face9.JPG",
                "role" => [
                    "fr" => "Vice-Présidente Partenariat et RP",
                    "en" => "Vice President of Partnerships and Public Relations",
                ],
                "profession" => [
                    "fr" => "Cheffe Cellule Communication, Partenariat et Animation Territoriale SGDS Bénin",
                    "en" => "Head of Communication, Partnerships and Territorial Engagement Unit, SGDS Benin",
                ],
                "created_at" => now()->addSeconds(45),
            ],
        ];

        foreach ($offices as $office) {
            Office::create($office);
        }
    }
}
