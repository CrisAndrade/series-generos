@extends('template')

@section('conteudo')
<div class="container">
<form action="/genero/editar" method="post">

    <input name="_token" type="hidden" value="<?= csrf_token() ?>">

     <input name="id" type="hidden" value="<?= $generos->id ?>">


    <div class="form-group">
        <label>Genero</label>
        <input name="genero" type="text" class="form-control" value="<?= $generos->genero ?>">
    </div>
    
    <div class="form-group">
        <label>Idade minima</label>
        <input name="idade_minima" type="text" class="form-control" value="<?= $generos->idade_minima ?>">
    </div>

    <button class="btn btn-primary" type="submit">Editar</button>

</form>
</div>
@endsection