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
        Schema::create('nurse_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');

            $table->foreignId('admission_id')->nullable()->constrained('admissions');
            // $table->foreignId('emergency_patient_id')->nullable()->constrained('emergency_patients');
            // $table->foreignId('out_patient_id')->nullable()->constrained('out_patients');

            $table->string('ward_room');
            $table->dateTime('date_time');
            $table->longText('focus');
            $table->longText('action');
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
