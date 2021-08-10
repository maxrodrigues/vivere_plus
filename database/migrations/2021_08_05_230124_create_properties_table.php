<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('id');

            $table->string('name');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('suites')->nullable();
            $table->integer('garage')->nullable();
            $table->decimal('area', 8, 2);
            $table->decimal('approximate_area', 8, 2)->nullable();

            $table->decimal('price', 10, 2);
            $table->decimal('condominium', 10, 2)->nullable();
            $table->decimal('tax', 10, 2);

            $table->text('description');

            $table->string('zipcode');
            $table->string('street');
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');

            $table->boolean('status')->default(true)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
