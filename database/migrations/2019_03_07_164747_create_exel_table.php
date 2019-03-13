<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('col1');
            $table->integer('col2');
            $table->integer('col3');
            $table->integer('col4');
            $table->integer('col5');
            $table->integer('col6');
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
        Schema::dropIfExists('exel');
    }
}
