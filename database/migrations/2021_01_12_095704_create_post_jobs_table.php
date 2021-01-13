<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('company_id');
            $table->string('job_title');
            $table->string('description')->nullable();
            $table->integer('vacancy');
            $table->string('skills')->nullable();
            $table->date('deadline_date');
            $table->text('job_type');
            $table->text('job_category');
            $table->string('application_way')->nullable();
            $table->string('job_responsibilities')->nullable();
            $table->string('display_salary')->nullable();
            $table->string('negotiate')->nullable();
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
        Schema::dropIfExists('post_jobs');
    }
}
