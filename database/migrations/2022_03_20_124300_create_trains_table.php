<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('company', 75);
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_time', 0);
            $table->dateTime('arrival_time', 0);
            $table->unsignedSmallInteger('train_code');
            $table->unsignedTinyInteger('carriages');
            $table->boolean('is_in_time')->nullable();
            $table->boolean('is_cancelled')->nullable();
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
}
