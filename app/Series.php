<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $fillable = array('nome', 'genero', 'descricao');
    public $timestamps = false;
}
