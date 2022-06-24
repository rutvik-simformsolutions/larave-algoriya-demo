<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadfollowupinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadfollowupinfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leadid')->index();
            $table->foreign('leadid')->references('id')->on('leadinfo')->onUpdate('cascade')->onDelete('cascade');
            $table->string('subject', 80);
            $table->text('description');
            $table->dateTime('currentdate');
            $table->unsignedBigInteger('currentfollowuptype')->comment('contacttype master ID')->index();
            $table->foreign('currentfollowuptype')->references('id')->on('contacttype')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('upcomingdate');
            $table->unsignedBigInteger('upcomingfollowuptype')->comment('contacttype master ID')->index();
            $table->foreign('upcomingfollowuptype')->references('id')->on('contacttype')->onUpdate('cascade')->onDelete('cascade');
            $table->string('upcomingfollowupdescription', 100);
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
        Schema::dropIfExists('leadfollowupinfo');
    }
}
