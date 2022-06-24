<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacttypemasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacttype', function (Blueprint $table) {
            $table->id();
            $table->string('contacttypename', 50);
            $table->unsignedBigInteger('createdby')->index();
            $table->foreign('createdby')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['0', '1'])->comment('0-inactive,1-active')->index();
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
        Schema::dropIfExists('contacttypemaster');
    }
}
