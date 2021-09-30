<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_properties', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('id');
            $table->foreignId('property_id')->constrained();

            $table->string('url');
            $table->string('alt')->nullable();
            $table->boolean('is_main')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_properties');
    }
}
