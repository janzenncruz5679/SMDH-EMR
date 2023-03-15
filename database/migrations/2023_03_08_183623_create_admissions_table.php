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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');

            $table->string('ward_room', 255);
            $table->string('type', 255);

            $table->dateTime('admission_start');
            $table->dateTime('admission_end');
            $table->string('admission_start_end_diff', 255);

            $table->string('physician', 255);
            $table->string('admitting_clerk', 255);

            $table->string('referred_by', 255);
            $table->string('ssc', 255);
            $table->longText('alergy')->nullable();
            $table->longText('insurance')->nullable();

            $table->longText('diagnosis');
            $table->longText('additional_diagnosis')->nullable();
            $table->longText('additional_operation_procedure')->nullable();

            $table->string('idc_code')->nullable();
            $table->string('icpm_code')->nullable();

            $table->boolean('is_billed')->default(false);
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
        Schema::dropIfExists('admissions');
    }
};
