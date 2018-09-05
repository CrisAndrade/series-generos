@extends('template')


@section('conteudo')
<div class="container">

    <h1>Listagem de series</h1>

<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Genero</th> 
        <th>Descrição</th>
        <th>EDITAR</th>
        <th>EXCLUIR</th>
    </tr>
    
    <?php foreach ($series as $serie) : ?>
    <tr>
        
        <td><?= $serie->nome ?></td>
        <td><?= $serie->idade ?></td>
        <td><?= $serie->genero ?></td>
        <td><?= $serie->descricao ?></td>
        <td><a href="/series/editar/<?php echo $serie->id ?>"> EDITAR</a></td>
        
        <td>
            <form  method="post" action="/series/excluir/<?php echo $serie->id ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <input type="submit" class="btn btn-danger" value="EXCLUIR">
            </form>
        
        </td>
        </tr>
    <?php endforeach ?>
</table>
</div>
@endsection
