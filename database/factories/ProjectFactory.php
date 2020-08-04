<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Project::class, function (Faker $faker) {

    $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 years', '+1 month')->getTimestamp());
    $endDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 years', '+1 month')->getTimestamp());

    return [
        'user_id' => $faker -> numberBetween (1, 5),
        'posted_by' => $faker -> firstName . ' ' . $faker -> lastName,
        'title' => $faker -> words(1, true),
        'img' => null,
        'start_date' => $startDate->toDateTimeString(),
        'end_date' => $endDate->toDateTimeString(),
        'status' => $faker -> numberBetween (0, 1),
        'about' => $faker -> sentence (100, true),
    ];
});
