<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('property_id');
            $table->string('property_name');
            $table->string('location');
            $table->string('city');
            $table->text('featured_image')->nullable();
            $table->string('gmap_latitude')->nullable();
            $table->string('gmap_longitude')->nullable();
            $table->text('description')->nullable();
            $table->string('type');
            $table->string('lot_area')->nullable();
            $table->string('floor_area')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('tnb')->nullable();
            $table->string('car_garage')->nullable();
            $table->string('amenities')->nullable();
            $table->string('youtube_url')->nullable();

            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->decimal('price', 10, 2);
            $table->softDeletes();
            $table->timestamps();
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
