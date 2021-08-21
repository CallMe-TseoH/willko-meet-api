<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterExitDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("enter_exit_data");
        Schema::create('enter_exit_data', function (Blueprint $table) {
            $table->id();
            $table->dateTime("time");
            $table->boolean("isEnter")->nullable();
            $table->foreignId("presence_id")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('enter_exit_data');
    }
}
