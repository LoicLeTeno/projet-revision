<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopularItemSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('popular_item_sections')->insert([
            [
                // Image
                'image' => 'course-1.jpg',

                // Details
                'desp' => 'Web Development',
                'price' => 169,

                // Text
                'titre' => 'Website Design',
                'text' => 'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                dolorem tempore.',

                // Profil
                'photo' => 'trainer-1.jpg',
                'name' => 'Antonio',
                'view' => 50,
                'love' => 65,
            ],
            [
                // Image
                'image' => 'course-2.jpg',

                // Details
                'desp' => 'Marketing',
                'price' => 250,

                // Text
                'titre' => 'Search Engine Optimization',
                'text' => 'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.',

                // Profil
                'photo' => 'trainer-2.jpg',
                'name' => 'Lana',
                'view' => 35,
                'love' => 42,
            ],
            [
                // Image
                'image' => 'course-3.jpg',

                // Details
                'desp' => 'Content',
                'price' => 180,

                // Text
                'titre' => 'Copywriting',
                'text' => 'Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores
                dolorem tempore.',

                // Profil
                'photo' => 'trainer-3.jpg',
                'name' => 'Brandon',
                'view' => 20,
                'love' => 85,
            ],
        ]);
    }
}
