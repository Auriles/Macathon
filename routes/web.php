<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login',function (){
    return view('login');
});

Route::get('/registercontributor',function (){
    return view('registercontributor');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile',function (){
    return view('profile');
});

Route::get('/newoperation',function (){
    return view('newoperation');
});

Route::get('/newoperationcontributor',function (){
    return view('newoperationcontributor');
});

Route::post('/newoperation', 'OperationController@create')->name('msgcontact');

Route::post('/registercontributor','RegisterContributorController@create')->name('contcreate');

Route::post('/newoperationcontributor','OperationContributorController@create')->name('opcontcreate');

Route::get('listeIntervenants','Recherche@rechercheIntervenantGet')->name('rechercheIntervenant');

Route::get('liste/{id}','Recherche@rechercheDetails')->name('rechercheDetails');

Route::get('/formulaire','OperationController@formulaire')->name('form');


