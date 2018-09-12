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

        $series = Series::all();
        return view('relacionar/home')->with('series', $series);
    }
}
