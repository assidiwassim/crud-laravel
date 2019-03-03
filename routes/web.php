<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/form','HomeController@afficherFormulaire');
Route::get('/confirm','HomeController@afficherConfirmation');
Route::post('/confirm','HomeController@AjouterContact');


Route::get('/','HomeController@afficherContacts');
Route::get('/info_contact/{id}','HomeController@afficherContact');
Route::get('/supprimer_contact/{id}','HomeController@supprimerContact');



Route::get('/ter','EmailsController@testEmailRaw');
Route::get('/tec','EmailsController@testEmailClassique');
Route::get('/tem','EmailsController@testEmailMailable');

