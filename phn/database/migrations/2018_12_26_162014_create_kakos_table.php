<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKakosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kai');
            $table->string('when');
            $table->string('number');
            $table->text('mondai');
            $table->text('s1');
            $table->text('s2');
            $table->text('s3');
            $table->text('s4');
            $table->text('s5');
            $table->string('answer');
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
        Schema::dropIfExists('kakos');
    }
}
