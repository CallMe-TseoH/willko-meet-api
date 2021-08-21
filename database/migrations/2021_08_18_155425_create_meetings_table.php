<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('meetings');
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string("organizedBy");
            $table->string("meetingPurpose");
            $table->date("meetingDate");
            $table->time("meetingStartTime");
            $table->time("meetingEndTime");
            $table->string("meetingPlace");
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
        Schema::dropIfExists('meetings');
    }
}
