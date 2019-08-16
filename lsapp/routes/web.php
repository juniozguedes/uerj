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

/*
Route::get('/hello', function () {
    echo "Hello!";
    //return "Hello World!";
});

Route::get('/users/{id}/{name}', function($id, $name){
	return 'This is user '.$name.' with an id of '.$id;
});

Route::get('/about', function(){
	return view('pages.about');
});
*/

Route::get('/', 'PagesController@index');

Route::get('/programa', 'PagesController@programa');

Route::get('/docente', 'PagesController@docente');

Route::get('/pesquisa', 'PagesController@pesquisa');

Route::get('/alunos', 'PagesController@alunos');

Route::get('/formularios', 'PagesController@formularios');

Route::get('/bolsas', 'PagesController@bolsas');

Route::get('/editais', 'PagesController@editais');

Route::get('/doutorado', 'PagesController@doutorado');

Route::get('/revista', 'PagesController@revista');

Route::get('/capes', 'PagesController@capes');

Route::get('/contato', 'PagesController@contato');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::resource('pdfs', 'PdfsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
