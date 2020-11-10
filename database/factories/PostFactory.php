<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->sentence(),
        'image' => URL::to('/') . Storage::url($faker->randomElement(['posts/biashara.jpeg', 'posts/bustani.jpg','posts/hewa.jpg','posts/kilimo.jpg','posts/magonjwa.jfif','posts/masoko.jpg','posts/mbegu.jpg','posts/mbolea.jpg','posts/mchicha.jpg','posts/nafaka.jpg','posts/nyanya.jpg','posts/pembejeo.jpg','posts/viwatilifu.jfif',])),
        'tag' => $faker->randomElement(['viwatilifu', 'mbegu','mbolea','uvunaji','masoko','hewa']),
        'user_id' => $faker->randomElement([6, 2, 3, 4, 5]),
        'category_id' => $faker->randomElement([1, 2, 3, 4, 5, 6,7]),
    ];
});
