<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClientModele extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'age',
        'genre',
        'soin_id',
        'numero',
    ];

    public function soin    () : BelongsTo
    {
        return $this->belongsTo(SoinsModele::class);
    }
}
