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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('person_name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('token')->nullable();
            $table->string('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->integer('company_location_id')->nullable();            
            $table->integer('company_industry_id')->nullable();
            $table->integer('company_size_id')->nullable();
            $table->string('founded_on')->nullable();
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->string('oh_mon')->nullable();
            $table->string('oh_tue')->nullable();
            $table->string('oh_wed')->nullable();
            $table->string('oh_thu')->nullable();
            $table->string('oh_fri')->nullable();
            $table->string('oh_sat')->nullable();
            $table->string('oh_sun')->nullable();
            $table->text('map_code')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
            $table->tinyInteger('status');
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
};
