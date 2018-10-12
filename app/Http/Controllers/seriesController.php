<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SerieRequest;
use App\Series;
use App\Generos;

class SeriesController extends Controller
{
    public function listagem()
    {  
        $series = Series::all();
        return view('serie/listagem')->with("series", $series);
    }

    public function cadastro()
    {
        $generos = Generos::all();   
        return view('serie/cadastro')->with('generos', $generos);
    }

    public function cadastrar(SerieRequest $request) 
    {
        $params = $request->all();
        $serie = Series::create($params);
        
        if (isset($request->generos)) {
            foreach ($request->generos as $key => $value) {
                $arrayGeneros[] = $key;
            }
            
            $serie->generos()->sync($arrayGeneros);    
        }

        return redirect()->action("RelacionarController@listagem");
    }

    public function remover (Request $request)
    {    
        $id = $request->id;
        $series = Series::find($id);
        $series->delete();
        return redirect()->action("SeriesController@listagem");
    }

    public function editar(Request $request)
    {
        $id = $request->id;
        $series = Series::find($id);
        return view('serie/editar')->with("series", $series);
    }  

    public function editarSerie (Request $request)
    {    
        $id = $request->id;
        $series = Series::find($id);
        $series->nome = $request->nome;
        $series->descricao = $request->descricao;
        $series->save(); 
        return redirect()->action("SeriesController@listagem");
    }
}