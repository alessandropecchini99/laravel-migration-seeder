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

            $table->string('company');
            $table->char('train_code', 8);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time');
            $table->date('departure_date');
            $table->time('arrival_time');
            $table->date('arrival_date');
            $table->tinyinteger('number_of_carriages');
            $table->boolean('on_time');
            $table->boolean('deleted');

            $table->timestamps();
        });
    }

    // Azienda
    // Stazione di partenza
    // Stazione di arrivo
    // Orario di partenza
    // Orario di arrivo
    // Codice Treno
    // Numero Carrozze
    // In orario
    // Cancellato

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
