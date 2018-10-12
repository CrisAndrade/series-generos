@extends('template')

@section('conteudo')
<div class="container">

    <center><h1>Listagem Series</h1></center>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>EDITAR</th>
            <th>EXCLUIR</th>
        </tr>

        <?php foreach ($series as $serie) : ?>
        <tr>
            <td>
                <?= $serie->nome ?>
            </td>
            <td>
                <?= $serie->descricao ?>
            </td>

            <td>
                <form method="post" action="/series/editar/<?php echo $serie->id ?>">
                    <?php echo csrf_field(); ?>
                    <input type="submit" class="btn btn-warning" value="EDITAR">
                </form>
            </td>

            <td>
                <form method="post" action="/series/excluir/<?php echo $serie->id ?>">
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