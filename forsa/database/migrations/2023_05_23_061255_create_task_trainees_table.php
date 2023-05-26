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
        Schema::create('task_trainees', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->string('repo_link');
            $table->unsignedBigInteger('Trainee_Id');
            $table->unsignedBigInteger('Task_Id');
            $table->foreign('Trainee_Id')->references('id')->on('trainees')->onDelete('cascade');
            $table->foreign('Task_Id')->references('id')->on('tasks')->onDelete('cascade');
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
        Schema::dropIfExists('task_trainees');
    }
};
