<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('suggestion_store');
            $table->string('decided_store');
            $table->boolean('decided_flg');
            $table->boolean('done_flg');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('cast_id');
            $table->foreign('cast_id')->references('id')->on('casts');
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
        Schema::table('cases', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropForeign(['cast_id']);
        });
        Schema::dropIfExists('cases');

    }
}
