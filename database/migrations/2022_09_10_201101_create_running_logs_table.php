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
        Schema::create('running_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('generator_id');
            $table->date('ran_on');
            $table->tinyInteger('hours_ran');
            $table->foreign('generator_id')->references('id')->on('generators')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('running_logs');
    }
};
