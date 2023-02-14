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
        Schema::create('second_admissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('record_id');
            $table->foreign('record_id')->references('id')->on('first_admissions');

            $table->longText('person_of_contact')->nullable();
            $table->longText('admitting_personel')->nullable();
            $table->longText('admission_start')->nullable();
            $table->longText('admission_end')->nullable();
            $table->string('admission_diff')->nullable();
            $table->string('type_of_admission')->nullable();
            $table->string('allergic')->nullable();

            $table->string('ssc')->nullable();
            $table->longText('insurance')->nullable();
            $table->longText('diagnosis')->nullable();
            $table->string('idc_code')->nullable();
            $table->longText('other_opt')->nullable();
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
        Schema::dropIfExists('second_admissions');
    }
};
