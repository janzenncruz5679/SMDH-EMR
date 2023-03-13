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
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients');

            $table->string('physician', 255);
            $table->longText('notes')->nullable();

            $table->longText('date');
            $table->longText('weight');
            $table->longText('temperature');
            $table->longText('blood_pressure');
            $table->longText('pulse');
            $table->longText('respiration');
            $table->longText('pain');
            $table->longText('initials');
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
        Schema::dropIfExists('vital_signs');
    }
};
