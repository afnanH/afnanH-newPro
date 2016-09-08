<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('id_number');
            $table->string('gender', 6);
            $table->string('phone_num');
            $table->string('job');
            $table->text('job_details');
            $table->string('marital_status',8);
            $table->string('governrate');
            $table->string('district');
            $table->string('village');
            $table->string('address');
            $table->date('birth_date');
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
        Schema::drop('patient');
    }
}
