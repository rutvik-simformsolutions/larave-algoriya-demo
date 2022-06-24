<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departmentid')->index();
            $table->foreign('departmentid')->references('id')->on('department')->onUpdate('cascade')->onDelete('cascade');
            $table->string('skillname', 25);
            $table->string('description', 50);
            $table->enum('status', ['0', '1', '2'])->comment('0-Inactive, 1-Active, 2-Delete')->index();
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
        Schema::dropIfExists('skill');
    }
}
