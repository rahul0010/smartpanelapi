<?php

use Faker\Generator as Faker;

$factory->define(App\CourseDetail::class, function (Faker $faker) {
    return [
        'course_id' => $faker->numberBetween(1,10),
        'day' => $faker->numberBetween($min= 1, $max = 60),
        'topic' => $faker->text($maxNbChars  = 200)
    ];
});
