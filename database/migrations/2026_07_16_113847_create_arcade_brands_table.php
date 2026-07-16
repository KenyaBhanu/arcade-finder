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
        Schema::create('arcade_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name', 25);
            $table->string('credit_name', 25);
            $table->decimal('cost_per_credit', 10, 2);
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcade_brands');
    }
};
