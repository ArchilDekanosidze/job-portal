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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('banner_job_listing');
            $table->text('banner_job_detail');
            $table->text('banner_job_categories');
            $table->text('banner_company_listing');
            $table->text('banner_company_detail');
            $table->text('banner_pricing');
            $table->text('banner_blog');
            $table->text('banner_post');
            $table->text('banner_faq');
            $table->text('banner_contact');
            $table->text('banner_terms');
            $table->text('banner_privacy');
            $table->text('banner_signup');
            $table->text('banner_login');
            $table->text('banner_forget_password');
            $table->text('banner_company_panel');
            $table->text('banner_candidate_panel');
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
        Schema::dropIfExists('banners');
    }
};
