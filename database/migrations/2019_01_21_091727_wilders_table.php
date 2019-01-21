<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WildersTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('school');
            $table->string('promo');
            $table->string('language');
            $table->string('descritpion');
            $table->string('where');
            $table->string('why');
            $table->string('tomorrow');
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
        Schema::dropIfExists('wilders');
    }
}