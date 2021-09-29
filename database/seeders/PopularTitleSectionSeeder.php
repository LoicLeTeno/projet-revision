<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopularTitleSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('popular_title_sections')->insert([
            [
                'titre' => 'Courses',
                'sous_titre' => 'Popular Courses',
            ],
        ]);
    }
}
