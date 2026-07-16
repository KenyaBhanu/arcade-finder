<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GameVersion extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'version_name',
        'series_id',
        'img',
    ];

    /**
     * Get the game series that this version belongs to.
     */
    public function gameSeries(): BelongsTo
    {
        return $this->belongsTo(GameSeries::class, 'series_id');
    }

    /**
     * Get the arcade games that reference this version.
     */
    public function arcadeGames(): HasMany
    {
        return $this->hasMany(ArcadeGame::class, 'game_id');
    }
}