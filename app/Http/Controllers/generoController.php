<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GeneroRequest;
use App\Generos;

class GeneroController extends Controller
{
    public function listagem(){  
        $generos = Generos::all();
        return view('genero/listagem')->with("generos", $generos);
    }

    public function cadastro(){    
        return view('genero/cadastro');
    }

    public function cadastrar(GeneroRequest $request) {    
        $params = $request->all();
        Generos::create($params);
        return redirect()->action("GeneroController@listagem");
    }

    public function remover (Request $request) {    
        $id = $request->id;
        $generos = Generos::find($id);
        $generos->delete();
        return redirect()->action("GeneroController@listagem");
    }

    public function editar(Request $request) {
        $id = $request->id;
        $generos = Generos::find($id);
        return view('genero/editar')->with("generos", $generos);
    }  

    public function editarGenero (Request $request) {    
        $id = $request->id;
        $generos = Generos::find($id);
        $generos->genero = $request->genero;
        $generos->idade_minima = $request->idade_minima;
        $generos->save(); 
        return redirect()->action("GeneroController@listagem");
    }
}