<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offers = [
            [
                "title" => [
                    "fr" => "Développeur Web Full Stack",
                    "en" => "Full Stack Web Developer",
                ],
                "description" => [
                    "fr" => "Nous recherchons un développeur full stack pour rejoindre notre équipe agile. Expérience en Laravel et Vue.js exigée.",
                    "en" => "We are looking for a full stack developer to join our agile team. Experience with Laravel and Vue.js required.",
                ],
                "type" => [
                    "fr" => "Temps plein",
                    "en" => "Full time",
                ],
                "city" => "Cotonou",
                "department" => "Littoral",
                "address" => "123 Rue de l’Informatique",
                "phone" => "+229 97 00 00 01",
                "email" => "jobs@ticbenin.bj",
                "graduation" => "Licence en Informatique",
                "closing_date" => now()->addDays(30),
            ],
            [
                "title" => [
                    "fr" => "Administrateur Systèmes et Réseaux",
                    "en" => "System and Network Administrator",
                ],
                "description" => [
                    "fr" => "Responsable de la gestion des serveurs Linux et de la sécurité réseau.",
                    "en" => "Responsible for managing Linux servers and network security.",
                ],
                "type" => [
                    "fr" => "Temps plein",
                    "en" => "Full time",
                ],
                "city" => "Porto-Novo",
                "department" => "Oueme",
                "address" => "Av. des Technologies",
                "phone" => "+229 97 00 00 02",
                "email" => "infra@ticbenin.bj",
                "graduation" => "Licence en Réseaux & Télécoms",
                "closing_date" => now()->addDays(25),
            ],
            [
                "title" => [
                    "fr" => "Consultant en Cybersécurité",
                    "en" => "Cybersecurity Consultant",
                ],
                "description" => [
                    "fr" => "Effectuer des audits de sécurité et proposer des solutions aux clients.",
                    "en" => "Conduct security audits and propose solutions to clients.",
                ],
                "type" => [
                    "fr" => "Freelance",
                    "en" => "Freelance",
                ],
                "city" => "Parakou",
                "department" => "Borgou",
                "address" => "Zone Technopôle",
                "phone" => "+229 97 00 00 03",
                "email" => "security@ticbenin.bj",
                "graduation" => "Master en Sécurité Informatique",
                "closing_date" => now()->addDays(40),
            ],
            [
                "title" => [
                    "fr" => "Chef de Projet Digital",
                    "en" => "Digital Project Manager",
                ],
                "description" => [
                    "fr" => "Coordonner les projets numériques en respectant les délais et le budget.",
                    "en" => "Manage digital projects respecting deadlines and budget.",
                ],
                "type" => [
                    "fr" => "Temps partiel",
                    "en" => "Part time",
                ],
                "city" => "Abomey-Calavi",
                "department" => "Atlantiques",
                "address" => "Immeuble TIC Zone A",
                "phone" => "+229 97 00 00 04",
                "email" => "projects@ticbenin.bj",
                "graduation" => "Master en Gestion de Projet",
                "closing_date" => now()->addDays(20),
            ],
            [
                "title" => [
                    "fr" => "Designer UI/UX",
                    "en" => "UI/UX Designer",
                ],
                "description" => [
                    "fr" => "Concevoir des interfaces ergonomiques et intuitives pour nos applications web et mobiles.",
                    "en" => "Design user-friendly and intuitive interfaces for our web and mobile applications.",
                ],
                "type" => [
                    "fr" => "Stage",
                    "en" => "Internship",
                ],
                "city" => "Bohicon",
                "department" => "Zou",
                "address" => "Résidence Créative, Bloc B",
                "phone" => "+229 97 00 00 05",
                "email" => "design@ticbenin.bj",
                "graduation" => "Licence en Design ou équivalent",
                "closing_date" => now()->addDays(15),
            ],
        ];

        foreach ($offers as $offer) {
            Career::create($offer);
        }
    }
}
