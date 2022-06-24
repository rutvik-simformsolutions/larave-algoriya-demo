<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('google_id')->nullable();
            $table->unsignedBigInteger('departmentid')->index()->nullable();
            $table->string('phone', 20);
            $table->enum('role', ['0', '1', '2'])->comment('0-superadmin,1-admin,2-employee')->index();
            $table->string('image', 150)->nullable();
            $table->enum('status', ['0', '1', '2'])->comment('0-inactive,1-active,2-deleted')->default('1')->index();
            $table->float('experience', 10, 2)->nullable()->index();
            $table->tinyInteger('manualtraking')->nullable()->index();
            $table->unsignedBigInteger('createdby')->unsigned()->index()->nullable();
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
        Schema::dropIfExists('users');
    }
}
