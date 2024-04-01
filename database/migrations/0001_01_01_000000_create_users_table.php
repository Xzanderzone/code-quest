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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('progress')->nullable();
            $table->string('character')->nullable();
            $table->string('seats')->nullable();
            $table->string('card')->nullable();
            $table->string('card_reason')->nullable();
            $table->string('toilet_choice')->nullable();
            $table->string('extra_toilet')->nullable();
            $table->string('tech_talk')->nullable();
            $table->string('feedback')->nullable();
            $table->string('track')->nullable();
            $table->string('track_first')->nullable();
            $table->string('mastermind')->nullable();//store mastermind skill here
            $table->string('guessing')->nullable();// guessing 
            $table->string('rockps')->nullable();// rps 
            $table->string('memory1')->nullable();// memory (1)
            $table->string('memory2')->nullable();// memory (2)
            $table->string('memory3')->nullable();// memory (3)
            $table->string('slider')->nullable();// slider 
            $table->integer('score')->default(0);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
