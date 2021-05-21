<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entities\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone_number' => $faker->phoneNumber,
        'message' => $faker->text('100'),
    ];
});
