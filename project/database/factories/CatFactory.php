<?php

use Faker\Generator as Faker;
use App\Breed;

$factory->define(App\Cat::class, function (Faker $faker) {
	$breeds = Breed::pluck('id');
    return [
        'name' => $faker->name,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'breed_id' => $faker->randomElement($breeds),
    ];
});
