<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(\App\Models\Course::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'category_id' => random_int(1,15),
        'description' => $faker->text,
        'rating' => random_int(1,5),
        'views' => random_int(0,200),
        'levels' => $faker->randomElement(['beginner', 'immediate', 'high']),
        'hours' => random_int(60, 240),
        'active' => $faker->boolean
    ];
});
