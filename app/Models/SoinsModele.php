<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class SoinsModele extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'price',
    ];
    public function client() : HasMany
    {
        return $this->hasMany(ClientModele::class);
    }
}
