<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShortContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortContacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('cellphone')->nullable(false);
            $table->string('email')->nullable(false);
            $table->integer('message')->nullable(false);
            $table->timestamps();
        });
        //con los campos id(int), name(varchar), cellphone(varchar), email(varchar) y message(varchar).
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shortContacts');
    }
}
