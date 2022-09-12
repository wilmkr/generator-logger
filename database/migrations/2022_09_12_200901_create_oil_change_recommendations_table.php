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
        Schema::create('oil_change_recommendations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('generator_id');
            $table->smallInteger('hours_interval');
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
        Schema::dropIfExists('oil_change_recommendations');
    }
};
