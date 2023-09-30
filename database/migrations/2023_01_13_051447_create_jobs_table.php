<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->text('title');
            $table->text('description');
            $table->text('responsibility')->nullable();
            $table->text('skill')->nullable();
            $table->text('education')->nullable();
            $table->text('benefit')->nullable();
            $table->text('deadline');
            $table->integer('vacancy');
            $table->integer('job_category_id');
            $table->integer('job_location_id');
            $table->integer('job_type_id');
            $table->integer('job_experience_id');
            $table->integer('job_gender_id');
            $table->integer('job_salary_range_id');
            $table->text('map_code')->nullable();
            $table->tinyInteger('is_featured');
            $table->tinyInteger('is_urgent');
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
        Schema::dropIfExists('jobs');
    }
};
