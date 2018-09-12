<?php

Route::get('/series','SeriesController@listagem');  
Route::get('/series/cadastro','SeriesController@cadastro');
Route::post('/series/cadastrar','SeriesController@cadastrar'); 

Route::delete('/series/excluir/{id}','SeriesController@remover'); 
Route::post('/series/editar/{id}','SeriesController@editar');
Route::post('/series/editar','SeriesController@editarSerie');




Route::get('/generos','GenerosController@listagem');  
Route::get('/generos/cadastro','GenerosController@cadastro');
Route::post('/generos/cadastrar','GenerosController@cadastrar'); 

Route::delete('/generos/excluir/{id}','GenerosController@remover'); 
Route::post('/generos/editar/{id}','GenerosController@editar');
Route::post('/generos/editar','GenerosController@editarGenero');




Route::get('/', 'RelacionarController@listagem');
Route::get('/relacao/relacao', 'RelacionarController@viewRelacionar');
Route::post('/relacao/relacionar', 'RelacionarController@Relacionar');
