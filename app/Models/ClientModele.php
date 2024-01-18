<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientModele extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'age',
        'genre',
        'soin',
        'numero',
    ];

    public function soin    () : BelongsTo
    {
        return $this->belongsTo(SoinsModele::class);
    }
}
