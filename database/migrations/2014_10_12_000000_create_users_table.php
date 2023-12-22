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
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_type', ['admin', 'healthcare_provider', 'patient'])->default('patient');
            $table->string('phone')->unique();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('qualifiation')->nullable();
            $table->string('nin_no')->unique()->nullable();
            $table->string('license_no')->unique()->nullable();
            $table->string('place_of_work')->nullable();
            $table->string('reference')->nullable();
            $table->string('price')->nullable();
            $table->string('verified')->nullable();
            $table->string('address')->nullable();
            $table->string('lga')->nullable();
            $table->string('city')->nullable();
            $table->string('license_img')->nullable();
            $table->string('qualification_img')->nullable();
            $table->string('state')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
