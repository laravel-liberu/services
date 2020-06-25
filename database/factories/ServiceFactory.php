<?php

use Faker\Generator as Faker;
use Illuminate\Support\Collection;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;
use LaravelEnso\Services\Models\Service;

$factory->define(Service::class, fn (Faker $faker) => [
    'measurement_unit_id' => fn () => MeasurementUnit::firstOrCreate(['name' => 'Piece'])->id,
    'name' => $faker->name,
    'code' => $faker->unique()->ean8,
    'list_price' => $faker->numberBetween(1, 300),
    'vat_percent' => (new Collection([5, 19, 24]))->random(),
    'description' => $faker->text,
    'is_active' => true,
]);
