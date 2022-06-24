<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectconversationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectconversation', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectid')->index();
            $table->foreign('projectid')->references('id')->on('project')->onUpdate('cascade')->onDelete('cascade');
            $table->string('mailfrom', 100);
            $table->string('mailto', 100);
            $table->string('subject', 50);
            $table->text('body');
            $table->dateTime('maildate');
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
        Schema::dropIfExists('projectconversation');
    }
}
