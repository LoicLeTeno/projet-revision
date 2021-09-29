<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('count_sections')->insert([
            [
                'number' => 1232,
                'desp' => 'Students',
            ],
            [
                'number' => 64,
                'desp' => 'Courses',
            ],
            [
                'number' => 42,
                'desp' => 'Events',
            ],
            [
                'number' => 15,
                'desp' => 'Trainers',
            ],
        ]);
    }
}
