<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cast_name');
            $table->integer('height');
            $table->integer('weight');
            $table->string('bust');
            $table->string('phone_number');
            $table->string('ng_play');
            $table->string('area');
            $table->string('experience');
            $table->string('face_img1');
            $table->string('face_img2');
            $table->string('body_img1');
            $table->string('body_img2');
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
        Schema::dropIfExists('casts');
    }
}
