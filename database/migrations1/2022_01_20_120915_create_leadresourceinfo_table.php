<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadresourceinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadresourceinfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leadfollowupid')->index();
            $table->foreign('leadfollowupid')->references('id')->on('leadfollowupinfo')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('upcomingfollowuptype')->comment('contacttype master ID')->index();
            $table->foreign('upcomingfollowuptype')->references('id')->on('contacttype')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('resourceid')->index();
            $table->foreign('resourceid')->references('id')->on('resourceinfo')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('leadresourceinfo');
    }
}
