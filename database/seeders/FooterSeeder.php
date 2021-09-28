<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            [
                // FOOTER contact
                'user' => 'Mentor',
                'adress' => 'A108 Adam Street',
                'city' => 'New York, NY 535022',
                'country' => 'United States',
                'phone' => '+1 5589 55488 55',
                'email' => 'info@example.com',

                // FOOTER link
                'home_link' => '#',
                'aboutUs_link' => '#',
                'services_link' => '#',
                'terms_link' => '#',
                'privacy_link' => '#',

                // FOOTER service
                'webDesign_link' => '#',
                'webDevelopment_link' => '#',
                'product_link' => '#',
                'marketing_link' => '#',
                'graphic_link' => '#',

                // FOOTER newsletter
                'p_newsletter' => 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',

                // Design by
                'design_link' => 'https://bootstrapmade.com/',
                'by' => 'BootstrapMade',

                // Réseaux sociaux
                'twitter_link' => '#',
                'facebook_link' => '#',
                'instagram_link' => '#',
                'googlePlus_link' => '#',
                'linkedin_link' => '#',
            ],
        ]);
    }
}
