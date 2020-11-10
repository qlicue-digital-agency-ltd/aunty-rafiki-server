<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Paragraph;
use Faker\Generator as Faker;

$factory->define(Paragraph::class, function (Faker $faker) {
    return [
        "title" => $faker->word,
        "body" => $faker->paragraph(),
        "ekilimo_category_id" =>  $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]),
    ];
});
