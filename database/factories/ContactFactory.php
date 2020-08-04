<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'subject' => $faker -> words(3, true),
        'message' => $faker -> sentence (100, true),
        'created_at' => $faker->dateTimeBetween('+0 days', '+2 years'),
    ];
});
