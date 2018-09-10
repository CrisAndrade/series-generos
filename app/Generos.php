<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = 'generos';
    protected $fillable = array('genero', 'idade_minima');
    public $timestamps = false;

    public function series ()
    {
        return $this->belongsToMany(Series::class, 'relacao');
    }
}
