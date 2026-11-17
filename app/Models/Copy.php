<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Copy extends Model
{
    // Связь с изданием
    public function edition(): BelongsTo
    {
        return $this->belongsTo(Edition::class);
    }

    // Связь "многие-ко-многим" с читателями через таблицу loans
    public function readers(): BelongsToMany
    {
        return $this->belongsToMany(Reader::class, 'loans')
                    ->withPivot('loan_date', 'planned_return_date', 'actual_return_date');
    }
}