<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainer_sections')->insert([
            [
                // Profil
                'photo' => 'trainer-1.jpg',

                // Texte
                'name' => 'Walter White',
                'desp' => 'Web Development',
                'texte' => 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                quaerat qui aut aut aut',

                // Link
                'link_twitter' => '#',
                'link_facebook' => '#',
                'link_instagram' => '#',
                'link_linkedin' => '#',
            ],
            [
                // Profil
                'photo' => 'trainer-2.jpg',

                // Texte
                'name' => 'Sarah Jhinson',
                'desp' => 'Marketing',
                'texte' => 'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                rerum temporibus',

                // Link
                'link_twitter' => '#',
                'link_facebook' => '#',
                'link_instagram' => '#',
                'link_linkedin' => '#',
            ],
            [
                // Profil
                'photo' => 'trainer-3.jpg',

                // Texte
                'name' => 'William Anderson',
                'desp' => 'Content',
                'texte' => 'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                toro des clara',

                // Link
                'link_twitter' => '#',
                'link_facebook' => '#',
                'link_instagram' => '#',
                'link_linkedin' => '#',
            ],
        ]);
    }
}
