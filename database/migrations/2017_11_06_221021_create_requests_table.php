<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('make')->nullable(false);
            $table->string('model')->nullable(false);
            $table->string('colors')->nullable(false);
            $table->integer('year')->nullable(false);
            $table->double('mileage',10,2)->nullable(false);
            $table->double('budget',10,2)->nullable(false);
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
        Schema::dropIfExists('requests');
    }
}
