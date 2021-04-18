<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = [
        'numero',
        'saldo',
        'ativo'

    ];

    public function agencia() {
        return $this->belongsTo(Agencia::class);
    }

    public function cliente() {
        return $this->hasMany(Cliente::class);
    }
}
