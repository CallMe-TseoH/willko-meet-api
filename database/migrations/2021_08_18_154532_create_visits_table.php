<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('visits');
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string("firstName");
            $table->string("lastName");
            $table->string("image");
            $table->string("email")->unique();
            $table->string("tel")->unique();
            $table->boolean("accepted")->default(false);
            $table->string("reason");
            $table->string("company");
            $table->boolean("hasAppointment")->default(true);
            $table->dateTime("appointmentDate")->nullable();
            $table->dateTime("arrivalDate")->nullable();
            $table->boolean("appointmentHasStarted")->default(false);
            $table->boolean("appointmentIsEnded")->default(false);
            $table->dateTime("appointmentStartedDate")->nullable();
            $table->dateTime("appointmentEndedDate")->nullable();
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
        Schema::dropIfExists('visits');
    }
}
