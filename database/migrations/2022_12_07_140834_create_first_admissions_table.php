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
        Schema::create('first_admissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('record_id')->unsigned();
            $table->string('sr_no')->nullable();
            // $table->string('perma_address')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('civil_status')->nullable();
            // $table->string('birthday')->nullable();
            // $table->string('nationality')->nullable();
            // $table->string('religion')->nullable();
            // $table->string('occupation')->nullable();
            $table->timestamps();
            $table->foreign('record_id')
                ->references('id')
                ->on('admissions')
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
        Schema::dropIfExists('first_admissions');
    }
};