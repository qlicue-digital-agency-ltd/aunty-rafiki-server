<?php

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
        $this->call(TrackerTableSeeder::class);
        $this->call(BloodLevelTableSeeder::class);
        $this->call(TimelineTableSeeder::class);
        $this->call(FoodTableSeeder::class);
    }
}
