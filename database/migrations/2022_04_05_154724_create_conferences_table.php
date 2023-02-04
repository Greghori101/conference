<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('theme');
            $table->string('subtheme');
            $table->string('lieu');
            $table->string('link');
            $table->date('date');
            $table->time('time');
            $table->string('image');
            $table->string('slug');
            $table->date('d_reception');
            $table->date('f_reception');
            $table->date('f_reviewing');
            $table->date('d_results');
            $table->date('f_results');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
};
