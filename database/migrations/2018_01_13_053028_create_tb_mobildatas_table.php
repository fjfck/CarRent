<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMobildatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_mobildatas', function (Blueprint $table) {
            $table->increments('IdMobilData');
            $table->string('NameMobilData');
            $table->integer('PriceMobilData');
            $table->string('PhotosMobilData');
            $table->string('DescriptionMobilData');
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
        Schema::drop('tb_mobildatas');
    }
}
