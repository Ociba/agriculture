<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('role_id ');
            $table->unsignedBigInteger('district_id ');
            $table->unsignedBigInteger('county_id');
            $table->unsignedBigInteger('village_id');
            $table->unsignedBigInteger('product_id');
            $table->string('problem');
            $table->string('affected_number');
            $table->string('image');
            $table->enum('status',['active','deleted'])->default('active');
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
        Schema::dropIfExists('emergencies');
    }
}
