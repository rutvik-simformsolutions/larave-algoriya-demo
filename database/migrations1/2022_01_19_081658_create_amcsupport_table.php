<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmcsupportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amcsupport', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectid')->index();
            $table->foreign('projectid')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('support', ['0', '1'])->comment('0-monthly, 1-yearly')->index();
            $table->double('supporttime', 8, 2)->comment('Month');
            $table->enum('status', ['1', '2'])->comment('1-active,2-delete')->index();
            $table->unsignedBigInteger('createdby')->index();
            $table->foreign('createdby')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
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
        Schema::dropIfExists('amcsupport');
    }
}
