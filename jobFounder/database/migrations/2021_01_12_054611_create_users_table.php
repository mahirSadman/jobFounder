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
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('password');
            $table->string('phone_num');
            $table->date('date_of_birth');
            $table->string('address')->nullable();
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->integer('nid')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('maritial_st')->nullable();
            $table->string('objective')->nullable();
            $table->integer('job_nature')->nullable();
            $table->string('preferred_area')->nullable();
            $table->string('preferred_job_category')->nullable();
            $table->string('skills')->nullable();
            $table->string('achievements')->nullable();
            $table->string('experience')->nullable();
            $table->string('curruculum_activity')->nullable();
            $table->string('languages')->nullable();
            $table->string('preference')->nullable();
            $table->string('uploaded_cv')->nullable();
            $table->string('image')->nullable();
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
