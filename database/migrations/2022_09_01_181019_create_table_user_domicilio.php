<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserDomicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->integer('user_id')->autoIncrement()->unsigned();
            $table->string('domicilio')->nullable(false);
            $table->integer('numero_exterior')->nullable(false)->unsigned();
            $table->string('colonia')->nullable(false);
            $table->integer('cp')->nullable(false)->unsigned();
            $table->string('ciudad')->nullable(false);
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
        Schema::dropIfExists('table_user_domicilio');
    }
}
