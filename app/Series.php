<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $fillable = array('nome', 'descricao');
    public $timestamps = false;

    public function generos ()
    {
        return $this->belongsToMany(Generos::class, 'relacao');
    }
}
