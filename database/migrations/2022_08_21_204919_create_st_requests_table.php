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
        Schema::create('st_requests', function (Blueprint $table) {
            $table->id('st_id');
            $table->string('request_by');
            $table->unsignedBigInteger('type');
            $table->foreign('type')->references('type')->on('st');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('st_requests');
    }
};
