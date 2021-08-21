<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("devices");
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->char("appId")->nullable();
            $table->char("appVersion")->nullable();
            $table->char("os")->nullable();
            $table->char("osVersion")->nullable();
            $table->boolean("pushNotificationState")->default(true);
            $table->boolean("emailNotificationState")->default(true);
            $table->boolean("smsNotificationState")->default(true);
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
        Schema::dropIfExists('devices');
    }
}
