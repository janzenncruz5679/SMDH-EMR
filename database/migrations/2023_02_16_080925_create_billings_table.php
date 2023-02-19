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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('or_no')->nullable();
            $table->string('full_name')->nullable();
            $table->decimal('total', 12, 2)->unsigned()->nullable();
            $table->decimal('medicine', 12, 2)->unsigned()->nullable();
            $table->decimal('lab', 12, 2)->unsigned()->nullable();
            $table->decimal('xray', 12, 2)->unsigned()->nullable();
            $table->decimal('ecg', 12, 2)->unsigned()->nullable();
            $table->decimal('oxygen', 12, 2)->unsigned()->nullable();
            $table->decimal('nbs', 12, 2)->unsigned()->nullable();
            $table->decimal('income', 12, 2)->unsigned()->nullable();
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
        Schema::dropIfExists('billings');
    }
};
