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
        Schema::create('physician_orders', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('suffix')->nullable();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('resident_physician')->nullable();
            $table->longText('entry_date')->nullable();
            $table->longText('entry_time')->nullable();
            $table->longText('progress_notes')->nullable();
            $table->longText('doctor_order')->nullable();
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
        Schema::dropIfExists('physician_orders');
    }
};
