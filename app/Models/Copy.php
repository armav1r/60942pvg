<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Copy extends Model
{
    use HasFactory;

    protected $fillable = [
        'edition_id',
        'wear_factor',
    ];

    public function edition(): BelongsTo
    {
        return $this->belongsTo(Edition::class);
    }

    public function readers(): BelongsToMany
    {
        return $this->belongsToMany(Reader::class, 'loans')
                    ->withPivot('loan_date', 'planned_return_date', 'actual_return_date');
    }
}