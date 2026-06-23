<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
     
            // HERO
        $table->string('hero_video_link')->nullable();
        $table->string('hero_video_file')->nullable();
        $table->text('hero_title')->nullable();
        $table->text('hero_description')->nullable();
        $table->string('hero_btn1')->nullable();
        $table->string('hero_btn1_link')->nullable();
        $table->string('hero_btn2')->nullable();
        $table->string('hero_btn2_link')->nullable();

        // FEATURES
        $table->text('feature1_icon')->nullable();
        $table->string('feature1_title')->nullable();
        $table->text('feature1_description')->nullable();

        $table->text('feature2_icon')->nullable();
        $table->string('feature2_title')->nullable();
        $table->text('feature2_description')->nullable();

        $table->text('feature3_icon')->nullable();
        $table->string('feature3_title')->nullable();
        $table->text('feature3_description')->nullable();

        // SERVICES HEADER
        $table->string('services_icon1')->nullable();
        $table->string('services_icon2')->nullable();
        $table->string('services_icon3')->nullable();
        $table->string('services_icon4')->nullable();
        $table->string('services_icon5')->nullable();
        $table->string('services_icon6')->nullable();
        //////////////////////////////////////////////
        $table->string('section_services_title')->nullable();
        $table->text('section_services_description')->nullable();
        

        $table->string('services_title1')->nullable();
        $table->text('services_description1')->nullable();

        $table->string('services_title2')->nullable();
        $table->text('services_description2')->nullable();

        $table->string('services_title3')->nullable();
        $table->text('services_description3')->nullable();

        $table->string('services_title4')->nullable();
        $table->text('services_description4')->nullable();

        $table->string('services_title5')->nullable();
        $table->text('services_description5')->nullable();

        $table->string('services_title6')->nullable();
        $table->text('services_description6')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
