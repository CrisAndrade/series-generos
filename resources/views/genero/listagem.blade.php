@extends('template')


@section('conteudo')
<div class="container">

    <h1>Listagem de generos</h1>

<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Genero</th> 
        <th>Idade minima</th>
        <th>EDITAR</th>
        <th>EXCLUIR</th>
    </tr>
    
    <?php foreach ($generos as $genero) : ?>
    <tr>
        
        <td><?= $genero->genero ?></td>
        <td><?= $genero->idade_minima ?></td>

        <td>
            <form  method="POST" action="/generos/editar/<?php echo $genero->id ?>">
                <?php echo csrf_field(); ?>
                <input type="submit" class="btn btn-warning" value="EDITAR">
            </form>
        </td>
        
        <td>
            <form  method="post" action="/generos/excluir/<?php echo $genero->id ?>">
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
