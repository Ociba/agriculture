<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('role_id');
            $table->string('sellers_name');
            $table->string('contact');
            $table->string('buyers_name');
            $table->string('buyers_contact');
            $table->string('sellers_ID');
            $table->string('buyer_ID');
            $table->string('description');
            $table->string('Number_of_items');
            $table->string('local_council_one_name');
            $table->string('phone_number');
            $table->string('vet_contact');
            $table->string('item_image');
            $table->string('from_destination');
            $table->string('to_destination');
            $table->string('vet_officer');
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
        Schema::dropIfExists('permits');
    }
}
