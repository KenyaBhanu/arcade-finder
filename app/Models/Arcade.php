<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arcade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'mall_name',
        'brand_id',
        'branch_name',
        'district',
        'city',
        'province',
    ];

    /**
     * Get the brand that this arcade belongs to.
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(ArcadeBrand::class, 'brand_id');
    }

    /**
     * Get the arcade games available at this arcade.
     */
    public function arcadeGames(): HasMany
    {
        return $this->hasMany(ArcadeGame::class);
    }
}