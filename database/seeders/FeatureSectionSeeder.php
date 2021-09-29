<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feature_sections')->insert([
            [
                // Css
                'icon' => 'ri-store-line',
                'color' => '#ffbb2c',

                // Html
                'link' => '#',
                'titre' => 'Lorem Ipsum',
            ],
            [
                // Css
                'icon' => 'ri-bar-chart-box-line',
                'color' => '#5578ff',

                // Html
                'link' => '#',
                'titre' => 'Dolor Sitema',
            ],
            [
                // Css
                'icon' => 'ri-calendar-todo-line',
                'color' => '#e80368',

                // Html
                'link' => '#',
                'titre' => 'Sed perspiciatis',
            ],
            [
                // Css
                'icon' => 'ri-paint-brush-line',
                'color' => '#e361ff',

                // Html
                'link' => '#',
                'titre' => 'Magni Dolores',
            ],
            [
                // Css
                'icon' => 'ri-database-2-line',
                'color' => '#47aeff',

                // Html
                'link' => '#',
                'titre' => 'Nemo Enim',
            ],
            [
                // Css
                'icon' => 'ri-gradienter-line',
                'color' => '#ffa76e',

                // Html
                'link' => '#',
                'titre' => 'Eiusmod Tempor',
            ],
            [
                // Css
                'icon' => 'ri-file-list-3-line',
                'color' => '#11dbcf',

                // Html
                'link' => '#',
                'titre' => 'Midela Teren',
            ],
            [
                // Css
                'icon' => 'ri-price-tag-2-line',
                'color' => '#4233ff',

                // Html
                'link' => '#',
                'titre' => 'Pira Neve',
            ],
            [
                // Css
                'icon' => 'ri-anchor-line',
                'color' => '#b2904f',

                // Html
                'link' => '#',
                'titre' => 'Dirada Pack',
            ],
            [
                // Css
                'icon' => 'ri-disc-line',
                'color' => '#b20969',

                // Html
                'link' => '#',
                'titre' => 'Moton Ideal',
            ],
            [
                // Css
                'icon' => 'ri-base-station-line',
                'color' => '#ff5828',

                // Html
                'link' => '#',
                'titre' => 'Verdo Park',
            ],
            [
                // Css
                'icon' => 'ri-fingerprint-line',
                'color' => '#29cc61',

                // Html
                'link' => '#',
                'titre' => 'Flavor Nivelanda',
            ],
        ]);
    }
}
