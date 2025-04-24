<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Banner::create([
            'title' => [
                'fr' => 'Bienvenue sur le site officiel des Pros de la Comm du Bénin',
                'en' => 'Welcome to the official website of Pros de la Comm du Bénin',
            ],
            'subtitle' => [
                'fr' => 'Rejoignez un réseau dynamique dédié à l’innovation, à la formation et à la mise en valeur des métiers de la communication.',
                'en' => 'Join a dynamic network dedicated to innovation, training and showcasing the communications professions.',
            ],
            'images' => json_encode([
                'assets/images/brand/banner1.jpg',
                'assets/images/brand/banner2.jpg',
            ])
        ]);
    }
}
