<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip', function (Blueprint $table) {
            $table->id();
            $table->string('location_trip', 100);
            $table->string('title_hotel',100);
            $table->string('departure_airport',50);
            $table->string('return_airport', 50);
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('days_stays');
            $table->string("img_place")->default("https://siviaggia.it/wp-content/uploads/sites/2/2020/07/passeggiare-spiaggia.jpg");
            $table->decimal('price', 6, 2);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('trip');
    }
}
