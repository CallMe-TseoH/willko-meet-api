<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableActionExtendedUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('action_extended_user');
        Schema::create('action_extended_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId("action_id")->constrained()->onDelete("cascade");
            $table->foreignId("extended_user_id")->constrained()->onDelete("cascade");
            $table->boolean("permission")->default(true);
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
        Schema::dropIfExists('pivot_table_action_extended_user');
    }
}
