<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('leadid')->index();
            $table->foreign('leadid')->references('id')->on('leadinfo')->onUpdate('restrict')->onDelete('cascade');
            $table->unsignedBigInteger('currencyid')->index()->nullable();
            $table->foreign('currencyid')->references('id')->on('currency')->onUpdate('restrict')->onDelete('restrict');
            $table->string('projectname', 100);
            $table->unsignedBigInteger('statusid')->index();
            $table->foreign('statusid')->references('id')->on('status')->onUpdate('restrict')->onDelete('restrict');
            $table->enum('status', ['0', '1'])->comment('0-Inactive, 1-Active')->index();
            $table->string('token', 20)->nullable();
            $table->unsignedBigInteger('createdby')->index();
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
        Schema::dropIfExists('project');
    }
}
