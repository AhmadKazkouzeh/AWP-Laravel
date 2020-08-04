<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Task::class, function (Faker $faker) {

    $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-3 years', '+1 month')->getTimestamp());
    $endDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 years', '+1 month')->getTimestamp());

    return [
        'project_id' => $faker -> numberBetween (1, 21),
        'user_id' => $faker -> numberBetween (1, 5),
        'posted_by' => $faker -> firstName . ' ' . $faker -> lastName,
        'title' => $faker -> words(1, true),
        'start_date' => $startDate->toDateTimeString(),
        'end_date' => $endDate->toDateTimeString(),
        'status' => $faker -> numberBetween (0, 1),
        'category' => $faker -> sentence (10, true),
        'description' => $faker -> sentence (100, true),
    ];
});
