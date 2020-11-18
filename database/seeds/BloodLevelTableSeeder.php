<?php

use App\BloodLevel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BloodLevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodLevel::create([
            "level" => "low",
            "status" => "bad",
            "title" => "Low",
            "user_id" => 1,
            "subtitle" => "You have a very low blood level",
            "quantity" => 9.0,
            "date" => Carbon::now()
        ]);

        BloodLevel::create([
            "level" => "low",
            "status" => "bad",
            "title" => "Low",
            "user_id" => 1,
            "subtitle" => "You have a very low blood level",
            "quantity" => 9.0,
            "date" => Carbon::now()
        ]);

        BloodLevel::create([
            "level" => "normal",
            "status" => "good",
            "title" => "Better",
            "user_id" => 1,
            "subtitle" => "A good progress with increase to blood level",
            "quantity" => 12.0,
            "date" => Carbon::now()
        ]);
    }
}
