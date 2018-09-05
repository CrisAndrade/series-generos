<?php

Route::get('/series','SerieController@listagem');  
Route::get('/series/cadastro','SerieController@cadastro');
Route::post('/series/cadastrar','SerieController@cadastrar'); 

Route::delete('/series/excluir/{id}','SerieController@remover'); 
Route::post('/series/editar/{id}','SerieController@editar');
Route::post('/series/editar','SerieController@editarSerie');




Route::get('/generos','GeneroController@listagem');  
Route::get('/generos/cadastro','GeneroController@cadastro');
Route::post('/generos/cadastrar','GeneroController@cadastrar'); 

Route::delete('/generos/excluir/{id}','GeneroController@remover'); 
Route::post('/generos/editar/{id}','GeneroController@editar');
Route::post('/generos/editar','GeneroController@editarGenero');
 