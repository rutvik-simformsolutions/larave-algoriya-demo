<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskdocumentresourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskdocumentresource', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resourceid')->index();
            $table->foreign('resourceid')->references('id')->on('resourceinfo')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('taskid')->index();
            $table->foreign('taskid')->references('id')->on('task')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('taskdocumentresource');
    }
}
