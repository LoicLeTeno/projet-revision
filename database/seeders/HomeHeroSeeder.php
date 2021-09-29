<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_heroes')->insert([
            [
                // Texte
                'titre_pt_1' => 'Learning Today,',
                'titre_pt_2' => 'Leading Tomorrow',
                'sous_titre' => 'We are team of talented designers making websites with Bootstrap',

                // Image
                'image' => 'hero-bg.jpg',
            ],
        ]);
    }
}
