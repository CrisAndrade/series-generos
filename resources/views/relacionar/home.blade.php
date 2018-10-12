@extends('template')

@section('conteudo')
<center><h1>HOME</h1></center>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>

            <th>Genero</th>

            <th>EXCLUIR</th>
        </tr>
        <?php foreach ($series as $serie) : ?>
        <?php $generos = $serie->generos;?>
        <tr> 
            <td>
                <?= $serie->nome ?>
            </td>
            <td>
                <?= $serie->descricao ?>
            </td>
            <td>
            <?php foreach ($generos as $genero) : ?>
                    <?= $genero->genero ?> &nbsp;
            <?php endforeach ?>
            </td>
            <td>
                <form method="get" action="/relacao/excluir/<?php echo $serie->id ?>">
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