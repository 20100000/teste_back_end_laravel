<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devedores extends Model
{
    protected $fillable = ['nome', 'doc', 'data_nascimento'];

    public function dividas()
    {
        return $this->hasMany(Dividas::class);
    }
}
