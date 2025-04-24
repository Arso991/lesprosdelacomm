<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => [
                    'fr' => 'L\'importance de la communication interpersonnelle',
                    'en' => 'The Importance of Interpersonal Communication',
                ],
                'content' => [
                    'fr' => 'La communication interpersonnelle est la base de toutes les relations humaines. Elle permet de mieux comprendre les émotions, les intentions et les attentes de l’autre. Dans un monde connecté, développer ses compétences en communication est un atout inestimable pour le travail en équipe, le leadership et la résolution de conflits.',
                    'en' => 'Interpersonal communication is the foundation of all human relationships. It helps better understand others’ emotions, intentions, and expectations. In a connected world, developing communication skills is an invaluable asset for teamwork, leadership, and conflict resolution.',
                ],
                'cover_image' => 'assets/images/brand/7.jpg',
                'views' => 45,
                'estimated_reading_time' => 3,
            ],
            [
                'title' => [
                    'fr' => 'La communication digitale : enjeux et perspectives',
                    'en' => 'Digital Communication: Challenges and Perspectives',
                ],
                'content' => [
                    'fr' => 'À l’ère du numérique, la communication digitale transforme les interactions entre les entreprises et leur public. Des réseaux sociaux aux newsletters, elle nécessite une stratégie cohérente et ciblée pour capter l’attention et fidéliser. Cet article explore les meilleures pratiques à adopter.',
                    'en' => 'In the digital age, digital communication is transforming the way businesses interact with their audiences. From social media to newsletters, it requires a coherent and targeted strategy to capture attention and retain loyalty. This article explores best practices.',
                ],
                'cover_image' => 'assets/images/brand/8.jpg',
                'views' => 60,
                'estimated_reading_time' => 4,
            ],
            [
                'title' => [
                    'fr' => 'Le rôle de l’écoute active dans la communication efficace',
                    'en' => 'The Role of Active Listening in Effective Communication',
                ],
                'content' => [
                    'fr' => 'L’écoute active est une compétence clé pour une communication réussie. Elle implique de se concentrer pleinement sur l’interlocuteur, de reformuler et de poser des questions pertinentes. Cette pratique favorise la confiance et évite les malentendus.',
                    'en' => 'Active listening is a key skill for successful communication. It involves fully concentrating on the speaker, rephrasing, and asking relevant questions. This practice fosters trust and avoids misunderstandings.',
                ],
                'cover_image' => 'assets/images/brand/11.jpg',
                'views' => 32,
                'estimated_reading_time' => 3,
            ],
            [
                'title' => [
                    'fr' => 'L’avenir de la communication : IA, métavers et au-delà',
                    'en' => 'The Future of Communication: AI, Metaverse, and Beyond',
                ],
                'content' => [
                    'fr' => 'Les nouvelles technologies redéfinissent notre façon de communiquer. L’intelligence artificielle, les assistants vocaux et le métavers offrent des opportunités inédites. Cet article explore les tendances émergentes qui façonneront la communication de demain.',
                    'en' => 'New technologies are redefining how we communicate. Artificial intelligence, voice assistants, and the metaverse offer unprecedented opportunities. This article explores emerging trends that will shape the future of communication.',
                ],
                'cover_image' => 'assets/images/brand/12.jpg',
                'views' => 75,
                'estimated_reading_time' => 5,
            ],
            [
                'title' => [
                    'fr' => 'L\'importance de la communication interpersonnelle',
                    'en' => 'The Importance of Interpersonal Communication',
                ],
                'content' => [
                    'fr' => 'La communication interpersonnelle est la base de toutes les relations humaines. Elle permet de mieux comprendre les émotions, les intentions et les attentes de l’autre. Dans un monde connecté, développer ses compétences en communication est un atout inestimable pour le travail en équipe, le leadership et la résolution de conflits.',
                    'en' => 'Interpersonal communication is the foundation of all human relationships. It helps better understand others’ emotions, intentions, and expectations. In a connected world, developing communication skills is an invaluable asset for teamwork, leadership, and conflict resolution.',
                ],
                'cover_image' => 'assets/images/brand/9.jpg',
                'views' => 45,
                'estimated_reading_time' => 3,
                'type' => 'rapport'
            ],
            [
                'title' => [
                    'fr' => 'État des lieux du numérique au Bénin en 2024',
                    'en' => 'Overview of Digital Technology in Benin in 2024',
                ],
                'content' => [
                    'fr' => 'Ce rapport dresse un panorama complet du secteur numérique au Bénin en 2024, avec un accent particulier sur les initiatives gouvernementales et les start-ups innovantes.',
                    'en' => 'This report provides a comprehensive overview of the digital sector in Benin in 2024, with a particular focus on government initiatives and innovative start-ups.',
                ],
                'cover_image' => 'assets/images/brand/15.jpg',
                'views' => 87,
                'estimated_reading_time' => 4,
                'type' => 'rapport'
            ],
            [
                'title' => [
                    'fr' => 'L’impact des réseaux sociaux sur la communication institutionnelle',
                    'en' => 'The Impact of Social Media on Institutional Communication',
                ],
                'content' => [
                    'fr' => 'Une analyse des pratiques des institutions publiques sur les plateformes sociales et leur influence sur la perception des citoyens.',
                    'en' => 'An analysis of public institutions’ practices on social platforms and their influence on citizen perception.',
                ],
                'cover_image' => 'assets/images/brand/12.jpg',
                'views' => 65,
                'estimated_reading_time' => 3,
                'type' => 'rapport'
            ],
            [
                'title' => [
                    'fr' => 'Cybersécurité : enjeux et défis pour les communicants',
                    'en' => 'Cybersecurity: Challenges and Issues for Communicators',
                ],
                'content' => [
                    'fr' => 'Le rapport explore les menaces numériques et les bonnes pratiques à adopter pour protéger les données sensibles dans le cadre de la communication numérique.',
                    'en' => 'The report explores digital threats and best practices for protecting sensitive data in digital communication.',
                ],
                'cover_image' => 'assets/images/brand/14.jpg',
                'views' => 52,
                'estimated_reading_time' => 5,
                'type' => 'rapport'
            ],
            [
                'title' => [
                    'fr' => 'Intelligence artificielle et communication digitale : état des lieux',
                    'en' => 'Artificial Intelligence and Digital Communication: State of Play',
                ],
                'content' => [
                    'fr' => 'Un document qui examine comment les outils basés sur l’IA transforment la communication et le marketing digital.',
                    'en' => 'A report that examines how AI-based tools are transforming communication and digital marketing.',
                ],
                'cover_image' => 'assets/images/brand/12.jpg',
                'views' => 78,
                'estimated_reading_time' => 4,
                'type' => 'rapport'
            ],
            [
                'title' => [
                    'fr' => 'Accessibilité numérique : un enjeu pour une communication inclusive',
                    'en' => 'Digital Accessibility: A Challenge for Inclusive Communication',
                ],
                'content' => [
                    'fr' => 'Ce rapport sensibilise à l’importance de rendre les contenus numériques accessibles à tous, y compris aux personnes en situation de handicap.',
                    'en' => 'This report raises awareness about the importance of making digital content accessible to all, including people with disabilities.',
                ],
                'cover_image' => 'assets/images/brand/7.jpg',
                'views' => 59,
                'estimated_reading_time' => 3,
                'type' => 'rapport'
            ],
            [
                'title' => [
                    'fr' => 'Forum National des Communicants',
                    'en' => 'National Communicators Forum',
                ],
                'content' => [
                    'fr' => 'Un grand rassemblement pour les professionnels de la communication autour des enjeux actuels du secteur.',
                    'en' => 'A major gathering for communication professionals to discuss current industry challenges.',
                ],
                'cover_image' => 'assets/images/brand/5.jpg',
                'views' => 120,
                'estimated_reading_time' => 5,
                'price' => 0,
                'event_day' => now()->addDays(33),
                'address' => 'Palais des Congrès, Cotonou',
                'type' => 'event',
            ],
            [
                'title' => [
                    'fr' => 'Atelier : Communication Digitale',
                    'en' => 'Workshop: Digital Communication',
                ],
                'content' => [
                    'fr' => 'Apprenez à maîtriser les outils du web pour booster votre communication d\'entreprise.',
                    'en' => 'Learn to master web tools to boost your corporate communication.',
                ],
                'cover_image' => 'assets/images/brand/4.jpg',
                'views' => 95,
                'estimated_reading_time' => 4,
                'price' => 10000,
                'event_day' => now()->addDays(26),
                'address' => 'Espace Coworking Sèmè City',
                'type' => 'event',
            ],
            [
                'title' => [
                    'fr' => 'Conférence : L’éthique dans la publicité',
                    'en' => 'Conference: Ethics in Advertising',
                ],
                'content' => [
                    'fr' => 'Une réflexion sur les bonnes pratiques en communication publicitaire.',
                    'en' => 'A reflection on good practices in advertising communication.',
                ],
                'cover_image' => 'assets/images/brand/3.jpg',
                'views' => 80,
                'estimated_reading_time' => 3,
                'price' => 5000,
                'event_day' => now()->addDays(25),
                'address' => 'Université d’Abomey-Calavi',
                'type' => 'event',
            ],
            [
                'title' => [
                    'fr' => 'Rencontre Pro : RP & Médias',
                    'en' => 'Pro Meetup: PR & Media',
                ],
                'content' => [
                    'fr' => 'Une rencontre entre journalistes, attachés de presse et communicants.',
                    'en' => 'A meetup between journalists, PR officers, and communication experts.',
                ],
                'cover_image' => 'assets/images/brand/2.jpg',
                'views' => 70,
                'estimated_reading_time' => 3,
                'price' => 0,
                'event_day' => now()->addDays(40),
                'address' => 'Maison des Médias, Cotonou',
                'type' => 'event',
            ],
            [
                'title' => [
                    'fr' => 'Formation : Prise de parole en public',
                    'en' => 'Training: Public Speaking Skills',
                ],
                'content' => [
                    'fr' => 'Développez votre aisance et impact lors de vos interventions publiques.',
                    'en' => 'Develop confidence and impact during your public interventions.',
                ],
                'cover_image' => 'assets/images/brand/1.jpg',
                'views' => 110,
                'estimated_reading_time' => 4,
                'price' => 15000,
                'event_day' => now()->addDays(30),
                'address' => 'CCI Bénin',
                'type' => 'event',
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
