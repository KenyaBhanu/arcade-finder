<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ArcadeBrand extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'credit_name',
        'cost_per_credit',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'cost_per_credit' => 'decimal:2',
    ];

    /**
     * Get the arcades that belong to this brand.
     */
    public function arcades(): HasMany
    {
        return $this->hasMany(Arcade::class, 'brand_id');
    }
}