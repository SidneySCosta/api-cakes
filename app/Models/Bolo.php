<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bolo extends Model
{
    use HasFactory;

    /**
     * Define a relacao entre bolo e interessados
     *
     * @return HasMany
     */
    public function interessados(): HasMany

    {
        return $this->hasMany(Interessado::class);
    }
}
