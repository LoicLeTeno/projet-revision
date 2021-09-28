<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'nav' => 'Mentor'
            ],
            [
                'nav' => 'Home'
            ],
            [
                'nav' => 'About'
            ],
            [
                'nav' => 'Courses'
            ],
            [
                'nav' => 'Trainers'
            ],
            [
                'nav' => 'Contact'
            ],
            [
                'nav' => 'Dashboard'
            ],
            [
                'nav' => 'Log'
            ],
            [
                'nav' => 'Register'
            ],
        ]);
    }
}
