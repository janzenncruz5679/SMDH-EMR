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
        Schema::create('new_admissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('new_patients');

            $table->string('ward_room', 255);
            $table->string('type', 255);

            $table->dateTime('admission_start');
            $table->dateTime('admission_end');
            $table->string('admission_start_end_diff',255);

            $table->string('physician', 255);
            $table->string('admitting_clerk', 255);

            $table->string('referred_by', 255);
            $table->string('ssc', 255);
            $table->longText('hospitalization_plan');
            $table->longText('alergy')->nullable();
            $table->longText('insurance')->nullable();

            $table->longText('data_origin');
            $table->longText('diagnosis');
            $table->longText('additional_diagnosis')->nullable();
            $table->longText('additional_operation_procedure')->nullable();

            $table->string('idc_code')->nullable();
            $table->string('icpm_code')->nullable();

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
        Schema::dropIfExists('new_admissions');
    }
};
