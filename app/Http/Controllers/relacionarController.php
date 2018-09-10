<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Generos;
use App\Series;
use App\Relacao;

class relacionarController extends Controller
{
    public function listagem ()
    {

        $series = Series::where('nome', 'Harry Potter')->get()-first();
        echo $series->nome;

        $generos = $series->generos;
        foreach ($generos as $genero) {
            echo $genero->nome;
        }
    }

}
