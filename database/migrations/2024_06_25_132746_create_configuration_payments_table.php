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
        Schema::create('configuration_payments', function (Blueprint $table) {
            $table->id();
            $table->enum('adquires',['704Pay']);
            $table->string('secret_production')->nullable();
            $table->string('id_production')->nullable();
            $table->string('secret_homologation')->nullable();
            $table->string('id_homologation')->nullable();
            $table->boolean('active')->default(false);
            $table->string('url_homologation')->nullable();
            $table->string('url_production')->nullable();
            $table->boolean('type')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration_payments');
    }
};
