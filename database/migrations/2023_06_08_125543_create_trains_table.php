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
      // Azienda
      // Stazione di partenza
      // Stazione di arrivo
      // Orario di partenza
      // Orario di arrivo
      // Codice Treno
      // Numero Carrozze
      // In orario
      // Cancellato
      $table->id();
      $table->string('company', 20);
      $table->string('starting_station', 70);
      $table->string('srriving_station', 70);
      $table->dateTime('starting_time');
      $table->dateTime('arriving_time');
      $table->string('train_code', 10)->unique();
      $table->tinyInteger('number_of_carriages');
      $table->boolean('is_in_time');
      $table->boolean('is_cancelled');
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
