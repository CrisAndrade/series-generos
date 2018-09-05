<?php

Route::get('/series','seriecontroller@listagem');  
Route::get('/series/cadastro','seriecontroller@cadastro');
Route::post('/series/cadastrar','seriecontroller@cadastrar'); 

Route::delete('/series/excluir/{id}','seriecontroller@remover'); 
Route::get('/series/editar/{id}','seriecontroller@editar');
Route::post('/series/editar','seriecontroller@editarSerie');




Route::get('/genero','generocontroller@listagem');  
Route::get('/genero/cadastro','generocontroller@cadastro');
Route::post('/genero/cadastrar','generocontroller@cadastrar'); 

Route::delete('/genero/excluir/{id}','generocontroller@remover'); 
Route::get('/genero/editar/{id}','generocontroller@editar');
Route::post('/genero/editar','generocontroller@editarGenero');
 