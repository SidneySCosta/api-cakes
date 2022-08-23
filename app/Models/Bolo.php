<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bolo extends Model
{
    use HasFactory;

    /**
     * Indica os campos que podem ter valor definidos via 
     * definição de dados em massa
     *
     * @var array
     */
    protected $fillable = ['nome', "peso", "valor", "quantidade"];


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
