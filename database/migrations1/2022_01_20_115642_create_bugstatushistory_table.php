<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugstatushistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugstatushistory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid')->index();
            $table->foreign('userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('fromstatusid')->index();
            $table->foreign('fromstatusid')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('tostatusid')->index();
            $table->foreign('tostatusid')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('createdby')->index();
            $table->foreign('createdby')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('bugstatushistory');
    }
}
