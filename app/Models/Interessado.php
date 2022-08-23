<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Interessado extends Model
{
    use HasFactory;


    /**
     * Define a relação entre interessado e bolo
     *
     * @return BelongsTo
     */
    public function bolo(): BelongsTo
    {
        return $this->belongsTo(Bolo::class);
    }
}
