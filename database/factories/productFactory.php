<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\product::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence,
//        'price' => Str::random(10),
        'price' => $faker->randomDigit,
        'discount' => $faker->randomDigit,
        'id_type' => $faker->randomDigit,
        'size' => 'L',
        'color' => 'red',
        'model' => $faker->sentence,
        'calification' => $faker->randomDigit,
        'quantity' => $faker->randomDigit,
        //
    ];
});
