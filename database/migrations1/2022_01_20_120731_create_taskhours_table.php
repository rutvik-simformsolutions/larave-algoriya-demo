<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTaskhoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskhours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('taskid')->index();
            $table->foreign('taskid')->references('id')->on('task')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('sessionstarttime')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->double('totalhours');
            $table->unsignedBigInteger('userid')->index();
            $table->foreign('userid')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('taskhours');
    }
}
