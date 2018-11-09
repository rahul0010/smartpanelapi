<?php

use Faker\Generator as Faker;

$factory->define(App\Fee::class, function (Faker $faker) {
    return [
        'student_id' => $faker->numberBetween(1,1000),
        'course_id' => $faker->numberBetween(1,10),
        'total_fee' => ($faker->numberBetween(5,20))*1000,
        'installment_amount' => ($faker->numberBetween(2,5))*1000
    ];
});
