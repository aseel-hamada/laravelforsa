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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('image');
            $table->string('bio');
            $table->unsignedBigInteger('Comp_Id');
            $table->unsignedBigInteger('Sepcialize_Id');
            $table->foreign('Comp_Id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('supervisors');
    }
};
