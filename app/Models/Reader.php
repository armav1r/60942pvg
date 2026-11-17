<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reader extends Model
{
    // Связь "многие-ко-многим" с экземплярами через таблицу loans
    public function copies(): BelongsToMany
    {
        return $this->belongsToMany(Copy::class, 'loans')
                    ->withPivot('loan_date', 'planned_return_date', 'actual_return_date');
    }
}