<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnexionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("connexions");
        Schema::create('connexions', function (Blueprint $table) {
            $table->id();
            $table->boolean("isConnected")->default(false);
            $table->string("qrCode");
            $table->dateTime("lastConnexionDateTime")->nullable();
            $table->dateTime("lastDisconnectionDateTime")->nullable();
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
        Schema::dropIfExists('connexions');
    }
}
