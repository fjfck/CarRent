<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




//|=========== ROUTE GUEST ============

Route::get('/Guest_Display', 'ControllerBase@getIndex1')
    ->name('get.Guest');

/////
Route::get('/Registrasi_Display','ControllerUser@getIndex2')
    ->name('get.Registrasi');

//
Route::post('/doAddProfileUserDB','ControllerUser@doAddProfileUserDB');
//

Route::post('/Registrasi_Display','ControllerUser@postIndex2')
    ->name('post.Registrasi');
/////

Route::get('/Login_Display','ControllerUser@getIndex3')
    ->name('get.Login');

Route::post('/Login_Display','ControllerUser@postIndex3')
    ->name('post.Login');





Route::get('/Admin_Display','ControllerBase@getIndex4')
    ->name('get.Admin');

Route::post('/Admin_Display','ControllerBase@postIndex4')
    ->name('post.Admin');

/////
Route::get('/AdminPokemon_Display','ControllerBase@getIndex5')
    ->name('get.AdminPokemon');

//
Route::post('/doAddPokemonDataDB','ControllerBase@doAddPokemonDataDB');
//

Route::post('/AdminPokemon_Display','ControllerBase@postIndex5')
    ->name('post.AdminPokemon');
/////

/////
Route::get('/AdminElement_Display','ControllerBase@viewData')
    ->name('get.AdminElement');

//
Route::post('/doAddPokemonElementDB','ControllerBase@doAddPokemonElementDB');
//

Route::post('/AdminElement_Display','ControllerBase@postIndex6')
    ->name('post.AdminElement');
/////

Route::get('/AdminUser_Display','ControllerBase@getIndex7')
    ->name('get.AdminUser');

Route::post('/AdminUser_Display','ControllerBase@postIndex7')
    ->name('post.AdminUser');

Route::get('/AdminTransaction_Display','ControllerBase@getIndex8')
    ->name('get.AdminTransaction');



Route::post('/AdminTransaction_Display','ControllerBase@postIndex8')
    ->name('post.AdminTransaction');

Route::get('/Member_Display','ControllerBase@getIndex9')
    ->name('get.Member');

Route::post('/Member_Display','ControllerBase@postIndex9')
    ->name('post.Member');

Route::get('/MemberProfile_Display','ControllerBase@getIndex10')
    ->name('get.MemberProfile');

Route::post('/MemberProfile_Display','ControllerBase@postIndex10')
    ->name('post.MemberProfile');

Route::get('/MemberPokemon_Display','ControllerBase@getIndex11')
    ->name('get.MemberPokemon');

Route::post('/MemberPokemon_Display','ControllerBase@postIndex11')
    ->name('post.MemberPokemon');

Route::get('/MemberYourCart_Display','ControllerBase@getIndex12')
    ->name('get.MemberYourCart');

Route::post('/MemberYourCart_Display','ControllerBase@postIndex12')
    ->name('post.MemberYourCart');







Route::group(['middleware'=>'web'],function (){
    Route::get('/Logout','ControllerUser@getLogout')
        ->name('get.Logout');

    Route::get('/Profile/{id}','ControllerUser@getProfile')
        ->name('get.Profile');

    Route::put('/Profile/{id}','ControllerUser@postProfile')
        ->name('post.Profile');

    Route::get('/Image/{filename}','ControllerUser@getUserPhotos')
        ->name('get.User.Photos');

    Route::get('/pokemon/image/{filename}','PokemonController@getPokemonImage')
        ->name('get.Pokemon.Photos');

    Route::get('/pokemon','ControllerPokemon@getAllPokemon')
        ->name('get.Pokemon');

    Route::get('/display/{id}' , 'ControllerPokemon@displayPokemon')
        ->name('display.Pokemon');




});
