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
        Schema::create('nurse_notes', function (Blueprint $table) {
            $table->id();
            $table->string('patient_fullname')->nullable();
            $table->string('record_date')->nullable();
            $table->string('record_time')->nullable();
            $table->string('age')->nullable();
            $table->string('ward')->nullable();
            $table->string('focus')->nullable();
            $table->longText('data_action_response')->nullable();
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
        Schema::dropIfExists('nurse_notes');
    }
};
