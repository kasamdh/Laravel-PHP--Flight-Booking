<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('street_name')->nullable();
            $table->string('apartment')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('passport')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('state')->nullable();
            $table->string('iata_country_code')->nullable();
            $table->timestamps();

        });
         DB::statement('ALTER TABLE client AUTO_INCREMENT = 10000;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
