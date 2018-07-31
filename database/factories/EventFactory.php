<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'title' => $faker->sentence(8, true),
        'slogam' => $faker->sentence(12, true),
        'general_theme' => $faker->unique()->sentence(2, true),
        'description' => $faker->text(),
        'period' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'place' => $faker->streetAddress,
        'department' => $faker->streetAddress,
        'organiser' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'image' => $faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
        'price' =>  $faker->randomFloat(2, 0, 500),
    ];
});