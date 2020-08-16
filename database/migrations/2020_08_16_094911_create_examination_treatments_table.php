<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminationTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examination_treatments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('signs_symptom_id');
            $table->unsignedBigInteger('weight_id');
            $table->unsignedBigInteger('disease_id');
            $table->unsignedBigInteger('drug_id');
            $table->unsignedBigInteger('week_id');
            $table->unsignedBigInteger('month_id');
            $table->string('bill');
            $table->string('deposit');
            $table->string('balance');
            $table->enum('status',['active','suspended','deleted'])->default('active');
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
        Schema::dropIfExists('examination_treatments');
    }
}
