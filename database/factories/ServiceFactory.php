<?php

namespace LaravelLiberu\Services\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\Helpers\Enums\VatRates;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit;
use LaravelLiberu\Services\Models\Service;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'measurement_unit_id' => fn () => MeasurementUnit::firstOrCreate(['name' => 'Piece'])->id,
            'name' => $this->faker->name,
            'code' => $this->faker->unique()->ean8,
            'list_price' => $this->faker->numberBetween(1, 300),
            'vat_percent' => VatRates::keys()->random(),
            'description' => $this->faker->text,
            'is_active' => true,
        ];
    }
}
