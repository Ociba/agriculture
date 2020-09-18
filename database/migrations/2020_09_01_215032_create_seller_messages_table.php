<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id ');
            $table->unsignedBigInteger('seller_id ');
            $table->string('buyers_name');
            $table->string('phone_number');
            $table->string('message');
            $table->enum('status',['read','not read','deleted']);
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
        Schema::dropIfExists('seller_messages');
    }
}
