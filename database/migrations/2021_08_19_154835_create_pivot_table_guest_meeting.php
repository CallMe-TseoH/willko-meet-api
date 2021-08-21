<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableGuestMeeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('guest_meeting');
        Schema::create('guest_meeting', function (Blueprint $table) {
            $table->id();
            $table->foreignId("guest_id")->constrained()->onDelete("cascade");
            $table->foreignId("meeting_id")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('pivot_table_guest_meeting');
    }
}
