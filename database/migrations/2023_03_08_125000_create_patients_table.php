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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();

            $table->string('fname', 255);
            $table->string('mname', 255)->nullable();
            $table->string('lname', 255);
            $table->string('suffix', 255);
            $table->string('birth_place', 255);
            $table->date('bdate');

            $table->string('contact_num', 255);
            $table->string('nationality', 255);
            $table->string('religion', 255);
            $table->string('civil_status', 255);
            $table->string('sex', 255);
            $table->string('occupation', 255)->nullable();
            $table->string('senior_num', 255)->nullable();

            $table->longText('perma_address');
            $table->longText('emergency_contact');
            $table->longText('address');
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
        Schema::dropIfExists('patients');
    }
};
