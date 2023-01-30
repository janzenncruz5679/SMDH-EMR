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
        Schema::create('sixth_outpatients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('record_id')->unsigned();
            $table->string('admission_diagnosis')->nullable();
            $table->string('principal_diagnosis')->nullable();
            $table->string('other_diagnosis')->nullable();
            $table->string('idc_code')->nullable();
            $table->string('principal_operation')->nullable();
            $table->string('other_operation')->nullable();
            $table->string('icpm_code')->nullable();
            $table->timestamps();
            $table->foreign('record_id')
                ->references('id')
                ->on('fifth_outpatients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sixth_outpatients');
    }
};