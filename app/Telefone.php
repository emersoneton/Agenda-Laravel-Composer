<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [

        'id',
        'ddd',
        'telefone',
        'pessoa_id'

    ];

    protected $table = 'telefones';

    public function pessoa(){

         $this->belongsTo(Pessoa::class, 'pessoa_id');

    }
}
