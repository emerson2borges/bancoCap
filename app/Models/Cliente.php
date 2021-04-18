<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cpf'
    ];

    public function conta() {
        return $this->belongsTo(Conta::class);
    }
}
