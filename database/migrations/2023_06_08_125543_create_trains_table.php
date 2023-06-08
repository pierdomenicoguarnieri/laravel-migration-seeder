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
      $table->string('company', 20)->nullable();
      $table->string('starting_station', 70)->nullable();
      $table->string('arriving_station', 70)->nullable();
      $table->dateTime('starting_time')->nullable();
      $table->dateTime('arriving_time')->nullable();
      $table->string('train_code', 10)->nullable()->unique();
      $table->tinyInteger('number_of_carriages')->nullable();
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
};
