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
        Schema::create('arcades', function (Blueprint $table) {
            $table->id();
            $table->string('mall_name', 50)->nullable();
            $table->foreignId('brand_id')
                ->constrained('arcade_brands')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
            $table->string('branch_name', 50);
            $table->string('district', 50);
            $table->string('city', 50);
            $table->string('province', 50);
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcades');
    }
};
