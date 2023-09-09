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
        Schema::create('courses', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->string('desc')->nullable();
                $table->string('Age_of_kids')->nullable();
                $table->integer('seats')->nullable();
                $table->int('fees')->nullable();
                $table->string('img')->nullable();
                $table->dateTime('class_time')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
