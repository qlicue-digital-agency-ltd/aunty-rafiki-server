<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'subtitle' => $faker->sentence(),
        'ingredients' => '1. Macaroon cookie tiramisu wafer liquorice pudding.\n\n2. Carrot cake candy cookie.\n\n3. Chocolate bar jujubes jelly-o brownie gummi bears tiramisu sesame snaps oat cake.\n\n4. Tiramisu bear claw gingerbread cotton candy muffin.\n\n5. Oat cake chocolate cake danish bear claw sweet roll soufflé fruitcake jelly halvah. Tiramisu gingerbread sesame snaps sugar plum.\n\n6. Chupa chups candy brownie macaroon donut tiramisu.',
        'how_to_prepare' => $faker->paragraph(),
        'alternative_food' => $faker->paragraph(),
        'food_id' => $faker->randomElement([1, 2, 3, 4, 5, 6]),
        'cover' => Storage::url($faker->randomElement(['images/diet.jpg', 'images/expecting.jpg', 'images/fruits.jpg', 'images/greens.jpg', 'images/juice.jpg', 'images/weaning.jpg'])),

    ];
});
