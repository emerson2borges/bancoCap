<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    protected $fillable = [
        'nome',
        'numero'
    ];

    public function contas() {
        return $this->hasMany(Conta::class);
    }
}
