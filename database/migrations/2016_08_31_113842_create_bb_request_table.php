<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bb_request', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->tinyInteger('patient_type');
            $table->date('with_date');
            $table->time('with_time');
            $table->date('arr_date');
            $table->time('arr_time');
            $table->string('with_by');
            $table->string('dept');
            $table->text('diag');
            $table->tinyInteger('fever')->nullable()->default(0);
            $table->tinyInteger('bleeding')->nullable()->default(0);
            $table->tinyInteger('hepatomegaly')->nullable()->default(0);
            $table->tinyInteger('splenomegaly')->nullable()->default(0);
            $table->tinyInteger('anemia')->nullable()->default(0);
            $table->tinyInteger('bleeding_hist')->nullable()->default(0);
            $table->tinyInteger('allergy_hist')->nullable()->default(0);
            $table->tinyInteger('transfusion_hist')->nullable()->default(0);
            $table->tinyInteger('drug_hist')->nullable()->default(0);
            $table->tinyInteger('fresh_blood')->nullable()->default(0);
            $table->integer('fresh_blood_bag')->nullable()->default(0);
            $table->tinyInteger('cryoppt')->nullable()->default(0);
            $table->decimal('cryoppt_unit')->nullable()->default(0);
            $table->tinyInteger('packed_RBCs')->nullable()->default(0);
            $table->decimal('packed_RBCs_unit')->nullable()->default(0);
            $table->tinyInteger('platelet_conc')->nullable()->default(0);
            $table->decimal('platelet_conc_unit')->nullable()->default(0);
            $table->tinyInteger('fresh_plasma')->nullable()->default(0);
            $table->decimal('fresh_plasma_unit')->nullable()->default(0);
            $table->tinyInteger('plt_rich_plasma')->nullable()->default(0);
            $table->decimal('plt_rich_plasma_unit')->nullable()->default(0);
            $table->tinyInteger('old_plasma')->nullable()->default(0);
            $table->decimal('old_plasma_unit')->nullable()->default(0);
            $table->tinyInteger('washed_RBCs')->nullable()->default(0);
            $table->decimal('washed_RBCs_unit')->nullable()->default(0);
            $table->tinyInteger('coombs')->nullable()->default(0);
            $table->tinyInteger('grouping')->nullable()->default(0);
            $table->tinyInteger('serology')->nullable()->default(0);
            $table->tinyInteger('ab_screening')->nullable()->default(0);
            $table->tinyInteger('EDTA_sample')->nullable()->default(0);
            $table->tinyInteger('serum_sample')->nullable()->default(0);
            $table->string('physician');
            $table->date('sig_date');
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
        Schema::drop('bb_request');
    }
}
