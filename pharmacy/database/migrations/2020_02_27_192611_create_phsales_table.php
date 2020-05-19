<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhsalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phsales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medicine');
            $table->string('medType');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('durationsId');
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
        Schema::alter('phsales',function (Blueprint $table) {
            $table->is_double('price');
        });

    }
}
