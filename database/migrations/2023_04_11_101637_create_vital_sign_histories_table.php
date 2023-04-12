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
        Schema::create('vital_sign_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('history_id');
            $table->foreign('history_id')->references('id')->on('vital_signs');
            $table->string('patient_fullname')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('physician')->nullable();
            $table->string('notes')->nullable();
            $table->longText('date')->nullable();
            $table->longText('weight')->nullable();
            $table->longText('temp')->nullable();
            $table->longText('bp')->nullable();
            $table->longText('pulse')->nullable();
            $table->longText('respiration')->nullable();
            $table->longText('pains')->nullable();
            $table->longText('initials')->nullable();
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
        Schema::dropIfExists('vital_sign_histories');
    }
};
