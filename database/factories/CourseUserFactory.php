<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CourseUser;
use Faker\Generator as Faker;

$factory->define(CourseUser::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'courses_id' => factory(\App\Courses::class),
        'payment_id' =>  factory(\App\Payment::class),
        'payment_status_id' => factory(\App\PaymentStatus::class)
    ];
});
