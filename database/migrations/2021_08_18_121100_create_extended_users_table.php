<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtendedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("extended_users");
        Schema::create('extended_users', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid")->unique();
            $table->boolean('gender');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('middlename')->nullable();
            $table->string('picture');
            $table->string('tel');
            $table->string('company');
            $table->string('service');
            $table->string('position');
            $table->string('office')->nullable();
//            $table->foreignId("user_uuid")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('extended_users');
    }
}
