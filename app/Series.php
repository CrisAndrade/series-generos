<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'series';
    protected $fillable = array('nome', 'descricao');
    public $timestamps = false;

    public function generosInline()
    {
        $generos = $this->generos();
        // $generos = self::generos();
        

        //if () {
            return "------------";
        //}

        /*
        foreach ($generos as $genero) {
            $generoInline . = " " . $genero;
        }
        
        return $generoInline ;
        */
    }

    public function generos()
    {
        return $this->belongsToMany(Generos::class, 'relacao');
    }
}
