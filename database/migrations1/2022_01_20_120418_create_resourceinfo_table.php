<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resourceinfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resourcetypeid')->index();
            $table->foreign('resourcetypeid')->references('id')->on('contacttype')->onUpdate('cascade')->onDelete('cascade');
            $table->string('resourcename');
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
        Schema::dropIfExists('resourceinfo');
    }
}
