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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name',200);
            $table->smallInteger('package_price');
            $table->smallInteger('package_days');
            $table->string('package_display_time',100);
            $table->tinyInteger('total_allowed_jobs');
            $table->tinyInteger('total_allowed_featured_jobs');
            $table->tinyInteger('total_allowed_photos');
            $table->tinyInteger('total_allowed_videos');
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
        Schema::dropIfExists('packages');
    }
};
