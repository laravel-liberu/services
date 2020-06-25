<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('measurement_unit_id')->unsigned()->nullable();
            $table->foreign('measurement_unit_id')->references('id')
                ->on('measurement_units');

            $table->string('name');
            $table->string('code')->unique();

            $table->unsignedDecimal('list_price', 11, 2);
            $table->unsignedTinyInteger('vat_percent');

            $table->string('description')->nullable();

            $table->boolean('is_active');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
