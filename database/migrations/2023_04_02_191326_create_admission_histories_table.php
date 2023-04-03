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
        Schema::create('admission_histories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('history_id');
            $table->foreign('history_id')->references('id')->on('admissions');
            $table->string('full_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('ward_room_bed_service')->nullable();
            // $table->string('sr_no')->nullable();
            $table->string('type')->nullable();
            // $table->string('perma_address')->nullable();

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
            $table->longText('patient_affiliate')->nullable();
            $table->longText('admitting_personel')->nullable();
            $table->longText('hospital_visit')->nullable();

            $table->string('type_of_admission')->nullable();
            $table->string('allergic')->nullable();
            $table->string('ssc')->nullable();
            $table->longText('insurance')->nullable();

            $table->string('main_diagnosis')->nullable();
            $table->longText('diagnosis')->nullable();
            $table->longText('other_opt')->nullable();
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
        Schema::dropIfExists('admission_histories');
    }
};