@extends('template')

@section('conteudo')
<form action="/series/editar" method="post">

    <input name="_token" type="hidden" value="<?= csrf_token() ?>">

     <input name="id" type="hidden" value="<?= $series->id ?>">

    <div class="form-group">
        <label>Nome</label>
        <input name="nome" type="text" class="form-control" value="<?= $series->nome ?>">
    </div>
    <div class="form-group">
        <label>Genero</label>
        <input name="genero" type="text" class="form-control" value="<?= $series->genero ?>">
    </div>
    <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" type="text" class="form-control" value="<?= $series->descricao ?>">
    </div>
    <button class="btn btn-primary" type="submit">Adicionar</button>

</form>
</div>
</body>
</html>
@endsection