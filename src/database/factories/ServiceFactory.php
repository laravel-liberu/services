<?php

use Faker\Generator as Faker;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use LaravelEnso\Services\app\Service;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'measurement_unit_id' => function () {
            return (factory(MeasurementUnit::class)->create())->id;
        },
        'name' => $faker->unique()->name,
        'code' => $faker->unique()->code,
        'list_price' => $faker->numberBetween(1, 300),
        'vat_percent' => collect([5, 19, 24])->random(),
        'description' => $faker->text,
        'is_active' => true,
    ];
});
