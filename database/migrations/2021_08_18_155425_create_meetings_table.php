<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

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
            $table->uuid("uuid")->default(Uuid::uuid4())->unique();
            $table->char("code");
            $table->string("meetingPurpose");
            $table->string("meetingPlace")->nullable();
            $table->string("description");
            $table->date("meetingDate");
            $table->boolean("hasStarted")->default(false);
            $table->boolean("isEnded")->default(false);
            $table->time("meetingStartTime");
            $table->time("meetingEndTime");
            $table->foreignId("room_id")->constrained()->onDelete('cascade');
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
