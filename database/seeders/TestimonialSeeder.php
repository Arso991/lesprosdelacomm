<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                "name" => "Marc D.",
                "image" => "assets/images/faces/face1.jpg",
                "profession" => [
                    "fr" => "Consultant en communication",
                    "en" => "Communication Consultant",
                ],
                "description" => [
                    "fr" => "Grâce à l'association, j’ai pu élargir mon réseau et découvrir des opportunités incroyables. Une vraie communauté de soutien !",
                    "en" => "Thanks to the association, I've been able to expand my network and discover incredible opportunities. A truly supportive community!",
                ],
            ],
            [
                "name" => "Sophie K.",
                "image" => "assets/images/faces/face2.jpg",
                "profession" => [
                    "fr" => "Étudiante en marketing",
                    "en" => "Marketing student",
                ],
                "description" => [
                    "fr" => "Les ateliers et formations proposés m’ont permis d’acquérir des compétences pratiques qui me servent au quotidien.",
                    "en" => "The workshops and training courses on offer have enabled me to acquire practical skills that I use on a daily basis.",
                ],
            ],
            [
                "name" => "Jean-Pierre L.",
                "image" => "assets/images/faces/face3.jpg",
                "profession" => [
                    "fr" => "Directeur d’agence",
                    "en" => "Branch Manager",
                ],
                "description" => [
                    "fr" => "Adhérer à l’APC nous a permis de collaborer avec des experts et d’accéder à des ressources exclusives.",
                    "en" => "Joining the APC has enabled us to collaborate with experts and access exclusive resources.",
                ],
            ],
            [
                "name" => "Karl D.",
                "image" => "assets/images/faces/face4.jpg",
                "profession" => [
                    "fr" => "Consultant en communication",
                    "en" => "Communication Consultant",
                ],
                "description" => [
                    "fr" => "Grâce à l'association, j’ai pu élargir mon réseau et découvrir des opportunités incroyables. Une vraie communauté de soutien !",
                    "en" => "Thanks to the association, I've been able to expand my network and discover incredible opportunities. A truly supportive community!",
                ],
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
