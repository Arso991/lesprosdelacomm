<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                "logo" => "assets/images/logos/partner1.jpg",
            ],
            [
                "logo" => "assets/images/logos/partner2.jpg",
            ],
            [
                "logo" => "assets/images/logos/partner1.jpg",
            ],
            [
                "logo" => "assets/images/logos/partner2.jpg",
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}
