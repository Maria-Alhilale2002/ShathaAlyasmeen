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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

             $table->string('city')->nullable();
        $table->text('address')->nullable();

        // Phones
        $table->string('phone1')->nullable();
        $table->string('phone2')->nullable();

        // Emails
        $table->string('email1')->nullable();
        $table->string('email2')->nullable();

        // WhatsApp
        $table->string('whatsapp')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
