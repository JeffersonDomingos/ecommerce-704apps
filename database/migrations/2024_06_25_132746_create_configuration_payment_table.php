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
        Schema::create('configuration_payment', function (Blueprint $table) {
            $table->id();
            $table->enum('adquires',['704Pay']);
            $table->string('secret_production');
            $table->string('id_production');
            $table->string('secret_homologation');
            $table->string('id_homologation');
            $table->boolean('active');
            $table->string('url_homologation');
            $table->string('url_production');
            $table->boolean('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configuration_payment');
    }
};
