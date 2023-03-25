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
        Schema::create('outpatients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patient_ids');

            $table->string('full_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();

            $table->string('sr_no')->nullable();
            $table->string('type')->nullable();
            $table->string('ward_room_bed_service')->nullable();

            $table->longText('hospital_visit')->nullable();
            $table->longText('personal_info')->nullable();
            // $table->string('gender')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('age')->nullable();
            // $table->string('birthday')->nullable();
            // $table->string('birthplace')->nullable();
            // $table->string('nationality')->nullable();
            // $table->string('occupation')->nullable();
            // $table->string('religion')->nullable();
            // $table->string('civil_status')->nullable();

            $table->longText('full_address')->nullable();
            $table->longText('contact_person')->nullable();
            $table->longText('case_summary')->nullable();
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
        Schema::dropIfExists('outpatients');
    }
};