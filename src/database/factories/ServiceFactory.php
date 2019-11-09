<?php

use Faker\Generator as Faker;
use LaravelEnso\Services\app\Service;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->text,
        'is_active' => true,
    ];
});
