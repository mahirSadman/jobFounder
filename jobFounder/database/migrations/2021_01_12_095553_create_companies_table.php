<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->integer('license_num')->unique();
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('location');
            $table->string('industry_type');
            $table->string('description')->nullable();
            $table->string('web_link')->nullable();
            $table->string('image')->nullable();
            $table->string('employee_num')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
