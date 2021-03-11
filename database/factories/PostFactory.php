<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;


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
        'image' => Storage::url($faker->randomElement(['images/diet.jpg', 'images/expecting.jpg', 'images/fruits.jpg', 'images/greens.jpg', 'images/juice.jpg', 'images/weaning.jpg'])),
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});
