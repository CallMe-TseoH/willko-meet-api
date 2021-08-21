<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("parcels");
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string("type");
            $table->string("deliveryCompany");
            $table->string("number");
            $table->string("image")->nullable();
            $table->dateTime("receiveDateTime");
            $table->dateTime("retrieveDateTime")->nullable();
            $table->boolean("retrieve")->default(false);
            $table->boolean("archived")->default(false);
            $table->foreignId("extended_user_id")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('parcels');
    }
}
