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
            $table->unsignedBigInteger('outpatientBilling_id')->nullable();
            $table->foreign('outpatientBilling_id')->references('id')->on('outpatients');

            $table->string('full_name')->nullable();
            $table->float('grand_total', 12, 2)->unsigned()->nullable();
            $table->longText('medicine')->nullable();
            $table->longText('lab')->nullable();
            $table->longText('xray')->nullable();
            $table->longText('ecg')->nullable();
            $table->longText('oxygen')->nullable();
            $table->longText('nbs')->nullable();
            // $table->string('income')->nullable();
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
