<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotCompanyExtendedUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('company_extended_user');
        Schema::create('company_extended_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId("company_id")->constrained()->onDelete("cascade");
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
        Schema::dropIfExists('pivot_company_extended_user');
    }
}
