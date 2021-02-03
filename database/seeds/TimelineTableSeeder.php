<?php

use App\Timeline;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TimelineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeline::create([
            'body' => "The baby position often at this point in pregnancy. If you had to deliver prematurely now, there is good chance the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes. Birthing classes prepare you",
            'image' => Storage::url('trackers/1.jpg'),
            'time' => "1",
        ]);

        Timeline::create([
            'body' => "The baby weighs about 2 pounds",
            'image' => Storage::url('trackers/2.jpg'),
            'time' => "2",
        ]);

        Timeline::create([
            'body' => "The baby weighs about 2 pounds of childbirth, including labor and delivery and taking care of your newborn.",
            'image' => Storage::url('trackers/3.jpg'),
            'time' => "3",
        ]);

        Timeline::create([
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position.",
            'image' => Storage::url('trackers/4.jpg'),
            'time' => "4",
        ]);
        Timeline::create([
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in.",
            'image' => Storage::url('trackers/5.jpg'),
            'time' => "5",
        ]);
        Timeline::create([
            'body' => "The baby weighs about 2 pounds, classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'image' => Storage::url('trackers/6.jpg'),
            'time' => "6",
        ]);

        Timeline::create([
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position.",
            'image' => Storage::url('trackers/7.jpg'),
            'time' => "7",
        ]);

        Timeline::create([
            'body' => "The baby weighs about 2 pounds, 6, classes prepare you for many aspects of childbirth, including labor and delivery and taking care of your newborn.",
            'image' => Storage::url('trackers/8.jpg'),
            'time' => "8",
        ]);
        Timeline::create([
            'body' => "The baby weighs about 2 pounds, 6 ounces, and changes position often at this point in pregnancy. the baby would survive. Ask your doctor about preterm labor warning signs. Now is the time to register for birthing classes.",
            'image' => Storage::url('trackers/9.jpg'),
            'time' => "9",
        ]);
    }
}
