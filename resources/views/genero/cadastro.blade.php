@extends('template')



@section('conteudo')
<div class="container">
<center><h1>Cadastrar Generos</h1></center>

@if (count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
    </ul>
    </div>
@endif

<form action="/generos/cadastrar" method="post">

    <input name="_token" type="hidden" value="<?= csrf_token() ?>">

    <div class="form-group">
        <label>Genero</label>
        <input name="genero" type="text" class="form-control">
    </div>
    
    <div class="form-group">
        <label>Idade minima</label>
        <input name="idade_minima" type="number" class="form-control">
    </div>
    <button class="btn btn-primary" type="submit">CADASTRAR</button>

</form>
</div>
@endsection