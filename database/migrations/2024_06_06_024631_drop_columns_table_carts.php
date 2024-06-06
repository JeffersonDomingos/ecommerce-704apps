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
        Schema::table('carts', function (Blueprint $table) {
            
                $table->dropColumn(['product_name', 'name_product', 'price_total']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('product_name')->nullable();
            $table->string('name_product')->nullable();
            $table->decimal('price_total', 8, 2)->default(0.00);
        });
    }
};
