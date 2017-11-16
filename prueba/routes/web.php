<?php

Auth::routes();
// Protected routes
Route::group(['middleware' => 'auth'], function () {
    // Main dashboard
    Route::get('/', 'HomeController@index');
    
    // RESTful routes
    //Route::get('/prueba/create','pruebaBase@create');
    //Route::post('/prueba', 'pruebaBase@store');

    Route::resource('prueba', 'PruebaController');

    //Pasar datos de la tabla en la base, al select en la vista
    //Route::get('slpceEML/create', ['as' => 'create', 'uses' => 'AssignmentController@index']);
    
    Route::resource('nursery', 'NurseryController');
    
    Route::resource('medics', 'MedicsController');
    Route::resource('slpce', 'SlpceController');
    Route::resource('slpceAL', 'SlpceALController');
    Route::resource('slpceEML', 'SlpceEMLController');
    Route::resource('nutriology', 'NutriologyController');
    Route::resource('laboratory', 'LabsController');
    Route::resource('reports', 'ReportsController');
    Route::resource('medicsExp','MedicsExpController');
    Route::resource('diagnostic','DiagController');

    //Route::resource('nursery', 'TopController');
    //Route::post('/nursery/{id}','TopController@show');  Pasar código peticion AJAX. Mandar objeto. 2 callback 
    
    
});
// Testing controller
Route::get('test', 'testController@action');
