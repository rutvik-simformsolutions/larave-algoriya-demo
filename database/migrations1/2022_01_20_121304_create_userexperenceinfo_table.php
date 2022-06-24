<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserexperenceinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userexperenceinfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid')->index();
            $table->foreign('userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('skillid')->index();
            $table->foreign('skillid')->references('id')->on('skill')->onUpdate('cascade')->onDelete('cascade');
            $table->float('experience', 10, 2);
            $table->float('expertise', 10, 2);
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
        Schema::dropIfExists('userexperenceinfo');
    }
}
