<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableExtendedUserMeeting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('extended_user_meeting');
        Schema::create('extended_user_meeting', function (Blueprint $table) {
            $table->id();
            $table->foreignId("extended_user_id")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('pivot_table_extended_user_meeting');
    }
}
