<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectassignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectassign', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectid')->index();
            $table->foreign('projectid')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('userid')->index();
            $table->foreign('userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('teamposition', ['0', '1', '2'])->comment('0-teamLeader,1-member,2-s')->index();
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
        Schema::dropIfExists('projectassign');
    }
}
