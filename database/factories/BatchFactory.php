<?php

use Faker\Generator as Faker;

$factory->define(App\Batch::class, function (Faker $faker) {
    return [
        'timing' => $faker->unique()->numerify('SCIB###')
    ];
});
