<?php

use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->numerify('SCIC####'),
        'duration' => $faker->numberBetween($min = 3, $max = 12),
        'total_fee' => ($faker->numberBetween($min = 3, $max = 20))*1000
    ];
});
