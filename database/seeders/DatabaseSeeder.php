<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use App\Models\WhyUpSection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            // UpDown
            HeaderSeeder::class,
            FooterSeeder::class,
            // Page HOME
            HomeHeroSeeder::class,
            AboutSectionSeeder::class,
            CountSectionSeeder::class,
            WhyUpSectionSeeder::class,
            WhyDownSectionSeeder::class,
            FeatureSectionSeeder::class,
            PopularTitleSectionSeeder::class,
            PopularItemSectionSeeder::class,
            TrainerSectionSeeder::class,
            
        ]);
    }
}
