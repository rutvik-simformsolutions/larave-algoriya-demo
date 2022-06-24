<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leadinfo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('addressid')->index();
            $table->foreign('addressid')->references('id')->on('address')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('leadsourceid')->index();
            $table->foreign('leadsourceid')->references('id')->on('leadsource')->onUpdate('cascade')->onDelete('cascade');
            $table->string('subject', 100);
            $table->text('joblink');
            $table->string('comapnyname', 50);
            $table->string('position', 50);
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 100)->index();
            $table->string('phone', 20)->index();
            $table->unsignedBigInteger('contacttypeid')->index();
            $table->foreign('contacttypeid')->references('id')->on('contacttype')->onUpdate('cascade')->onDelete('cascade');
            $table->string('contacttypedetail', 100);
            $table->enum('isclient', ['0', '1', '2'])->comment('0-lead,1-client,2-delete')->index();
            $table->string('token', 20);
            $table->enum('status', ['0', '1'])->comment('0-inActive, 1-active')->default('1')->index();
            $table->unsignedBigInteger('createdby')->nullable()->index();
            $table->foreign('createdby')->references('id')->on('users')->onUpdate('set null')->onDelete('set null');
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
        Schema::dropIfExists('leadinfo');
    }
}
