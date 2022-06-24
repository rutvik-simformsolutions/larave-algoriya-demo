<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsourcemasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadsource', function (Blueprint $table) {
            $table->id();
            $table->string('leadsourcename', 25);
            $table->enum('status', ['0', '1', '2'])->comment('0-inActive, 1-active, 2-deleted')->index();
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
        Schema::dropIfExists('leadsourcemaster');
    }
}
