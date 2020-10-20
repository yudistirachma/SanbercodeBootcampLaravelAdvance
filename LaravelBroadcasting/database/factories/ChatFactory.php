<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\{User, Chat};
use Faker\Generator as Faker;

$factory->define(Chat::class, function (Faker $faker) {
    return [
        'subject' => $faker->sentence(7),
        'user_id' => User::all()->random()->id,
    ];
});
