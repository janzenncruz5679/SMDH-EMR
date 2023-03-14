<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('admission_id')->nullable()->constrained('admissions');
            // $table->foreignId('emergency_patient_id')->nullable()->constrained('emergency');
            // $table->foreignId('out_patient_id')->nullable()->constrained('out_patients');

            $table->string('total');
            $table->string('medicines')->nullable();
            $table->string('laboratory')->nullable();
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
