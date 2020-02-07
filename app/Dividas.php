<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dividas extends Model
{
    protected $fillable = ['descricao', 'valor', 'data_vencimento'];

    public function devedor()
    {
        return $this->belongsTo(Devedores::class);
    }

}
