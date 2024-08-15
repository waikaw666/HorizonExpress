<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static
 */
class Schedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }
    public function origin(): BelongsTo
    {
        return $this->belongsTo(Origin::class);
    }
    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class);
    }
}
