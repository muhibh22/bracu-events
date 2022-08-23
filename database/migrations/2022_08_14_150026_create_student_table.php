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
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('name', 30);
            $table->string('email', 30);
            $table->enum('gender', ["M", "F"]);
            $table->date('dob');
            $table->string('password');
            $table->enum('department', ["CSE", "BBS", "EEE", "MNS"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
};
