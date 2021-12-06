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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id')->autoIncrement();
            $table->string('email');
            $table->string('password');
            $table->string('username');
            $table->string('name');
            $table->string('school');
            $table->string('city');
            $table->integer('birthyear');
            $table->enum('is_login', ['0','1'])->default('0');
            $table->enum('is_active', ['0','1'])->default('1');
            $table->rememberToken();
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
