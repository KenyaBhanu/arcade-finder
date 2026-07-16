<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArcadeGame extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'arcade_id',
        'game_id',
        'credits_required',
        'machine_count',
        'status',
        'last_verified',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'credits_required' => 'decimal:2',
        'status' => 'integer',
        'last_verified' => 'date',
    ];

    /**
     * Get the arcade that this record belongs to.
     */
    public function arcade(): BelongsTo
    {
        return $this->belongsTo(Arcade::class);
    }

    /**
     * Get the game version that this record belongs to.
     */
    public function gameVersion(): BelongsTo
    {
        return $this->belongsTo(GameVersion::class, 'game_id');
    }
}