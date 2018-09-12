@extends('template')



@section('conteudo')
<div class="container">
<h1>Formulário de produto</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<form action="/series/cadastrar" method="post">

    <input name="_token" type="hidden" value="<?= csrf_token() ?>">


    <div class="form-group">
        <label>Nome</label>
        <input name="nome" type="text" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" type="text" class="form-control">
    </div>

    <h1>Generos</h1>

    <?php foreach ($generos as $genero) : ?>
        <label for="<?= $genero->id ?>">
            <input type="checkbox" name="generos[{{$genero->id}}]"/>
            <?= $genero->genero ?>
        </label>
        <br />
    <?php endforeach ?>
    <br />
    <button class="btn btn-primary" type="submit">CADASTRAR</button>

</form>
</div>
@endsection