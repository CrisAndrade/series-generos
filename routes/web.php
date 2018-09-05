<?php

Route::get('/series','SerieController@listagem');  
Route::get('/series/cadastro','SerieController@cadastro');
Route::post('/series/cadastrar','SerieController@cadastrar'); 

Route::delete('/series/excluir/{id}','SerieController@remover'); 
Route::get('/series/editar/{id}','SerieController@editar');
Route::post('/series/editar','SerieController@editarSerie');




Route::get('/genero','GeneroController@listagem');  
Route::get('/genero/cadastro','GeneroController@cadastro');
Route::post('/genero/cadastrar','GeneroController@cadastrar'); 

Route::delete('/genero/excluir/{id}','GeneroController@remover'); 
Route::get('/genero/editar/{id}','GeneroController@editar');
Route::post('/genero/editar','GeneroController@editarGenero');
 