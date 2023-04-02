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
        Schema::create('fluid_intakes', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();


            // $table->string('age')->nullable();
            // $table->string('gender')->nullable();
            // $table->string('ward')->nullable();
            // $table->string('bed')->nullable();
            // $table->string('diagnosis')->nullable();
            $table->longText('patient_info')->nullable();


            $table->longText('date_of_intake')->nullable();
            $table->longText('intake')->nullable();

            $table->longText('oral')->nullable();
            $table->longText('parental')->nullable();
            $table->longText('oral_parental_total')->nullable();
            // $table->longText('oral_parental_total')->nullable();


            $table->longText('urine')->nullable();
            $table->longText('drainage')->nullable();
            $table->longText('others')->nullable();
            $table->longText('urine_drainage_others_total')->nullable();
            // $table->longText('urine_drainange_others_total')->nullable();


            $table->longText('overall_total')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('fluid_intakes');
    }
};
