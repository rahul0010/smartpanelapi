<?php

use Faker\Generator as Faker;

$factory->define(App\Faculty::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'middle_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'photo'=>$faker->imageUrl($width = 640, $height = 480),
        'phone'=>$faker->phoneNumber,
        'address'=> $faker->address,
        'email' => $faker->email,
        'designation' => $faker->jobTitle,
        'aadhar_no' => $faker->numerify('############'),
        'salary' => ($faker->numberBetween(5,20))*1000,
        'joining_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
