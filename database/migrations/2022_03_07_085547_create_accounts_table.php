<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->date("dob")->nullable();
            $table->string("phone_no")->nullable();
            $table->string("email")->nullable();
            $table->text("address")->nullable();
            $table->string("hobby")->nullable();
            $table->string("gender")->nullable();
            $table->string("country")->nullable();
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
        Schema::dropIfExists('accounts');
    }
};
