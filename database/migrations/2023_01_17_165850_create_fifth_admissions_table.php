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
        Schema::create('fifth_admissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('record_id')->unsigned();
            $table->string('ssc')->nullable();
            $table->string('alert_allergic')->nullable();
            $table->string('hospitalization_plan')->nullable();
            $table->string('health_insurance')->nullable();
            $table->string('coverage_insurance')->nullable();
            $table->string('furnished_by')->nullable();
            $table->string('informant_address')->nullable();
            $table->string('relation_to_patient')->nullable();
            $table->timestamps();
            $table->foreign('record_id')
                ->references('id')
                ->on('fourth_admissions')
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
        Schema::dropIfExists('fifth_admissions');
    }
};