<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectid')->index();
            $table->foreign('projectid')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('priorityid')->index();
            $table->foreign('priorityid')->references('id')->on('priority')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('statusid')->index();
            $table->foreign('statusid')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
            $table->string('taskname', 25);
            $table->text('description');
            $table->float('totalhours', 10, 2);
            $table->unsignedBigInteger('assignto');
            $table->enum('statue', ['0', '1'])->comment('0-Inactive, 1-Active')->index();
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
        Schema::dropIfExists('task');
    }
}
