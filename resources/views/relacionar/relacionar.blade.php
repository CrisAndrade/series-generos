@extends('template')

@section('conteudo')


<div class="container">

    <center>
        <form method="POST" action="/relacao/relacionar">
        
            <select>
                <?php foreach ($series as $serie) : ?>
                <option value='<?= $serie->id ?>'>
                    <?= $serie->nome ?>
                </option>
                <?php endforeach ?>
            </select>

            <hr>
            
            <?php foreach ($generos as $genero) : ?>
            <label>
                <input type="checkbox" value='<?= $genero->id ?>' id="<?= $genero->id ?>">
                <?= $genero->genero ?>
            </label>
            &nbsp;
            <?php endforeach ?>
            <br>
            <input type="submit" value="RELACIONAR" />
        </form>
    </center>
        
</div>
    
@endsection