<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('address1', 100);
            $table->string('address2', 100);
            $table->unsignedBigInteger('city')->nullable();
            $table->foreign('city')->references('id')->on('city')->onUpdate('set null')->onDelete('set null');
            $table->unsignedBigInteger('state')->nullable();
            $table->foreign('state')->references('id')->on('state')->onUpdate('set null')->onDelete('set null');
            $table->string('pincode', 10);
            $table->unsignedBigInteger('country')->nullable();
            $table->foreign('country')->references('id')->on('country')->onUpdate('set null')->onDelete('set null');
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
        Schema::dropIfExists('address');
    }
}
