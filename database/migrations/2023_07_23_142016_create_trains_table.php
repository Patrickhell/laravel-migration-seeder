<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('companie', 30);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure', $precision = 0);
            $table->time('arrival', $precision = 0);
            $table->smallInteger('train_number')->unsigned()->nullable();
            $table->smallInteger('railroad_passenger_number')->unsigned()->nullable();
            $table->date('departing_trains_today');
            $table->boolean('in_time');
            $table->boolean('cancelled');
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
        Schema::dropIfExists('trains');
    }
};
