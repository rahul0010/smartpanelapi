<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'middle_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'photo'=>$faker->imageUrl($width = 640, $height = 480),
        'phone'=>$faker->phoneNumber,
        'address'=> $faker->address,
        'email' => $faker->email,
        'aadhar_no' => $faker->numerify('############'),
        'batch_id' => $faker->numberBetween(1,10),
        'faculty_id' => $faker->numberBetween(1,10),
        'admission_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
