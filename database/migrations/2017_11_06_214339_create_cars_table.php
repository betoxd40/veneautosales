<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('type')->nullable(false);
            $table->string('model')->nullable(false);
            $table->string('trim')->nullable(false);
            $table->string('body')->nullable(false);
            $table->string('exterior')->nullable(false);
            $table->string('interior')->nullable(false);
            $table->integer('doors')->nullable(false);
            $table->string('vin')->nullable(false);
            $table->integer('mileage')->nullable(false);
            $table->string('engine')->nullable(false);
            $table->string('fuel')->nullable(false);
            $table->string('drive')->nullable(false);
            $table->string('mpg')->nullable(false);
            $table->integer('year')->nullable(false);
            $table->double('price', 10, 2)->nullable(false);
            $table->string('comments',1000)->nullable(true);
            $table->string('mainImg')->nullable(false);
            $table->string('secondaryImg',3000)->nullable(true);
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
        Schema::dropIfExists('cars');
    }
}
