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
        Schema::create('authores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameo');
            $table->string('emailo');
            $table->string('countryo');
            $table->string('names');
            $table->string('emails');
            $table->string('countrys');
            $table->string('namet');
            $table->string('emailt');
            $table->string('countryt');
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
        Schema::dropIfExists('authores');
    }
};