<?php

use Faker\Generator as Faker;
use App\Fee;

$factory->define(App\FeeDetail::class, function (Faker $faker) {
    return [
        'fee_id' => $faker->numberBetween(1,1000),
        'installment_no' => $faker->numberBetween(1,5),
        'payment_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'installment_amount' => ($faker->numberBetween(1,5))*1000,
        'amount_paid' =>   ($faker->numberBetween(1,5))*1000,
        'total_fee_paid' =>   ($faker->numberBetween(1,5))*1000,
        'paid_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'balance' => ($faker->numberBetween(1,5))*1000
    ];
});
