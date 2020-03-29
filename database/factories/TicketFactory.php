<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'message' => $faker->paragraph(5),
        'user_id' => $faker->numberBetween(1, 500),
        'order_id' => $faker->numberBetween(1, 50),
        'status'  => $faker->randomElement(['pending', 'closed', 'waiting']),
        'ticket_type_id' => $faker->numberBetween(1,4),
    ];
});
