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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();

        // رأس الصفحة
        $table->string('page_title')->nullable();
        $table->text('page_description')->nullable();

        // من نحن
        $table->text('about_paragraph1')->nullable();
        $table->text('about_paragraph2')->nullable();

        // الرؤية
        $table->string('vision_icon')->nullable();
        $table->text('vision_text')->nullable();

        // الرسالة
        $table->string('mission_icon')->nullable();
        $table->text('mission_text')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
