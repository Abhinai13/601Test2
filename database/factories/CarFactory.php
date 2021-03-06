<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Car;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Car::class, function (Faker $faker) {


    return [
        'make' => $faker->randomElement(['Ford', 'Toyota','Honda']),
        'model' => $faker->text(7),
        'year' => $faker->biasedNumberBetween(1998,2017, 'sqrt'),
    ];
});
