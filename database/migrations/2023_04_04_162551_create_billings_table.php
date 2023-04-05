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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admissionBilling_id')->nullable();
            $table->foreign('admissionBilling_id')->references('id')->on('admissions');
            $table->unsignedBigInteger('emergencyBilling_id')->nullable();
            $table->foreign('emergencyBilling_id')->references('id')->on('emergencies');

            $table->string('full_name')->nullable();
            $table->string('total')->nullable();
            $table->string('medicine')->nullable();
            $table->string('lab')->nullable();
            $table->string('xray')->nullable();
            $table->string('ecg')->nullable();
            $table->string('oxygen')->nullable();
            $table->string('nbs')->nullable();
            $table->string('income')->nullable();
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
        Schema::dropIfExists('billings');
    }
};
