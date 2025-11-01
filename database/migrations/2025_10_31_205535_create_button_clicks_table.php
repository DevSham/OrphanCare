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
        Schema::create('button_clicks', function (Blueprint $table) {
            $table->id();
            $table->string('button_id'); // Unique identifier for each button
            $table->string('button_text'); // The text displayed on the button
            $table->string('page_url'); // The page where the button was clicked
            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('referer')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('device_type')->nullable();
            $table->string('browser')->nullable();
            $table->string('platform')->nullable();
            $table->timestamp('clicked_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('button_clicks');
    }
};
