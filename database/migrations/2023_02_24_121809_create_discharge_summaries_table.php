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
        Schema::create('discharge_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('discharge_date')->nullable();
            $table->longText('patients_identity')->nullable();
            $table->longText('positive_finding')->nullable();
            $table->longText('treatment')->nullable();
            $table->longText('course_in_hospital')->nullable();
            $table->longText('final_diagnosis')->nullable();
            $table->longText('plan')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('license_number')->nullable();
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
        Schema::dropIfExists('discharge_summaries');
    }
};
