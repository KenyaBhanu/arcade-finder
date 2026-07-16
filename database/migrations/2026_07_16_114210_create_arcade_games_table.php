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
        Schema::create('arcade_games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('arcade_id')
                ->constrained('arcades')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('game_id')
                ->constrained('game_versions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->decimal('credits_required', 8, 2);
            $table->integer('machine_count');
            $table->tinyInteger('status')->default(1);
            $table->date('last_verified');
            $table->timestamps();
        });
    }
 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcade_games');
    }
};
