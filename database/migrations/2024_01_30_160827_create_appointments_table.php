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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('healthcare_provider_id');
            $table->unsignedBigInteger('speciality_id')->nullable();
            $table->string('provider');
            $table->string('phone');
            $table->string('age');
            $table->string('gender');
            $table->string('problem');
            $table->string('location');
            $table->string('address')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->string('date');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('healthcare_provider_id')->references('id')->on('healthcare_providers')->onDelete('cascade');
            $table->foreign('speciality_id')->references('id')->on('specialities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
