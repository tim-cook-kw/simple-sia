<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('gender');
            $table->string('place_of_birth');
            $table->date('birth');
            $table->string('phone');
            $table->string('email');
            $table->string('religion');
            $table->string('nasionality');
            $table->string('address');
            $table->string('country');
            $table->string('zip');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('student_database');
    }
}
