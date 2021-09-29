<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhyDownSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('why_down_sections')->insert([
            [
                'icon' => 'bx bx-receipt',
                'titre' => 'Corporis voluptates sit',
                'text' => 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut
                aliquip',
            ],
            [
                'icon' => 'bx bx-cube-alt',
                'titre' => 'Ullamco laboris ladore pan',
                'text' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt',
            ],
            [
                'icon' => 'bx bx-images',
                'titre' => 'Labore consequatur',
                'text' => 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere',
            ],
        ]);
    }
}
