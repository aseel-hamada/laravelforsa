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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('Acceptance');
            $table->string('proposal');
            $table->integer('Sepcialize_Id');
            $table->boolean('is_accept')->default(0);
            $table->unsignedBigInteger('Comp_Id');
            $table->unsignedBigInteger('Trainee_Id');
            $table->foreign('Comp_Id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('Trainee_Id')->references('id')->on('trainees')->onDelete('cascade');
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
        Schema::dropIfExists('applicants');
    }
};
