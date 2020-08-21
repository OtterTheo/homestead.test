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

Route::view('/', 'welcome');
//le premier contact c'est ce que l'utilisateur va tapé dans l'URL et ce qui va s'affiche
//le deuxième contact c'est le nom de la vue
Route::view('contact', 'contact');

//a-propos correspond au chemin dans l'URL
//a_propos correspond à la vue
Route::view('a-propos', function () {
    return view('a_propos');
});

//Clients
//Route::get('clients', 'ClientsController@index');
//Route::get('clients/create', 'ClientsController@create');
//Route::get('clients/{client}', 'ClientsController@show');
//Route::get('clients/{client}/edit', 'ClientsController@edit');
//Route::post('clients', 'ClientsController@store');
//Route::patch('clients/{client}', 'ClientsController@update');
//Route::delete('clients/{client}', 'ClientsController@destroy');

//cette ligne permet de constituer toutes les routes d'une pages qui comporte une un create, edit et destroy
Route::resource('clients','ClientsController');

//Contact
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
