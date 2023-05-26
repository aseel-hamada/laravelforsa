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
        Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('bio');
            $table->integer('phone');
            $table->string('string');
            $table->string('link');
            $table->unsignedBigInteger('User_Id');
            $table->unsignedBigInteger('Sepcialize_Id');
            $table->foreign('User_Id')->references('id')->on('g_users')->onDelete('cascade');
            $table->foreign('Sepcialize_Id')->references('id')->on('specializations')->onDelete('cascade');
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
        Schema::dropIfExists('trainees');
    }
};
