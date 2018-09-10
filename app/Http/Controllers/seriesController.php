<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SerieRequest;
use App\Series;

class SeriesController extends Controller
{
    public function listagem(){  
        $series = Series::all();
        return view('serie/listagem')->with("series", $series);
    }

    public function cadastro(){    
        return view('serie/cadastro');
    }

    public function cadastrar(SerieRequest $request) {    
        $params = $request->all();
        Series::create($params);
        return redirect()->action("SeriesController@listagem");
    }

    public function remover (Request $request) {    
        $id = $request->id;
        $series = Series::find($id);
        $series->delete();
        return redirect()->action("SeriesController@listagem");
    }

    public function editar(Request $request) {
        $id = $request->id;
        $series = Series::find($id);
        return view('serie/editar')->with("series", $series);
    }  

    public function editarSerie (Request $request) {    
        $id = $request->id;
        $series = Series::find($id);
        $series->nome = $request->nome;
        $series->descricao = $request->descricao;
        $series->save(); 
        return redirect()->action("SeriesController@listagem");
    }
}