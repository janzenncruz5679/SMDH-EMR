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
        Schema::create('fourth_admissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('record_id')->unsigned();
            $table->string('start_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_date')->nullable();
            $table->string('end_time')->nullable();
            $table->string('total_days')->nullable();
            $table->string('admitting_physician')->nullable();
            $table->string('admitting_clerk')->nullable();
            $table->string('admission_type')->nullable();
            $table->string('referred_by')->nullable();
            $table->timestamps();
            $table->foreign('record_id')
                ->references('id')
                ->on('third_admissions')
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
        Schema::dropIfExists('fourth_admissions');
    }
};
