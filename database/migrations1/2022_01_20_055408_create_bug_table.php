<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectid')->index();
            $table->foreign('projectid')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('taskid')->index();
            $table->foreign('taskid')->references('id')->on('task')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('severityid')->index();
            $table->foreign('severityid')->references('id')->on('severity')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('priorityid')->index();
            $table->foreign('priorityid')->references('id')->on('priority')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('statusid')->index();
            $table->foreign('statusid')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title', 100);
            $table->text('description');
            $table->unsignedBigInteger('assignto')->index();
            $table->foreign('assignto')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('bug');
    }
}
