<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_patients', function (Blueprint $table) {
            $table->id();

            $table->string('fname', 255);
            $table->string('mname', 255)->nullable();
            $table->string('lnamename', 255);
            $table->date('bdate');
            $table->string('birth_place', 255);

            $table->string('contact_num', 255);
            $table->string('nationality', 255);
            $table->string('religion', 255);
            $table->string('civil_status', 255);
            $table->string('sex', 255);
            $table->string('occupation', 255)->nullable();

            $table->longText('perma_address');
            $table->longText('address');

            $table->string('senior_num', 255)->nullable()->unique();
            $table->longText('relatives')->nullable();

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
        Schema::dropIfExists('new_patients');
    }
};
