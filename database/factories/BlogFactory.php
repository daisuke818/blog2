<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog2;
use Faker\Generator as Faker;

$factory->define(Blog2::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->realText
    ];
});
