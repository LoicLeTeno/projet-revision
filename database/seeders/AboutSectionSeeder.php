<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_sections')->insert([
            [
                // Image
                'image' => 'about.jpg',

                // Texte
                'titre' => 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore
                magna aliqua.',
                'li_1' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'li_2' => 'Duis aute irure dolor in reprehenderit in voluptate
                velit.',
                'li_3' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu
                fugiat nulla pariatur.',
                'sous_text' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                in voluptate',
            ],
        ]);
    }
}
