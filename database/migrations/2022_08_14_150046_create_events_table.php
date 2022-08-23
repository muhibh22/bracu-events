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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('name', 30);
            $table->date('time');
            $table->string('guest');
            $table->text('description');
            $table->unsignedBigInteger('venue');
            $table->foreign('venue')->references('room_name')->on('rooms');
            $table->text('image')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('accept')->default(0);
            $table->string('organiser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
