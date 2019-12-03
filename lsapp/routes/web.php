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
Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
  'prefix' => '{locale}', 
  'where' => ['locale' => '[a-zA-Z]{2}'],
  'middleware' => 'setlocale'
], function() {
	
	Route::get('/', 'PagesController@index')->name('home');


	Route::get('/programa', 'PagesController@programa')->name('programa');

	Route::get('/docente', 'PagesController@docente')->name('docente');

	Route::get('/pesquisa', 'PagesController@pesquisa')->name('pesquisa');

	Route::get('/alunos', 'PagesController@alunos')->name('alunos');

	Route::get('/formularios', 'PagesController@formularios')->name('formularios');

	Route::get('/bolsas', 'PagesController@bolsas')->name('bolsas');

	Route::get('/editais', 'PagesController@editais')->name('editais');

	Route::get('/doutorado', 'PagesController@doutorado')->name('doutorado');

	Route::get('/revista', 'PagesController@revista')->name('revista');

	Route::get('/capes', 'PagesController@capes')->name('capes');

	Route::get('/contato', 'PagesController@contato')->name('contato');

	Route::get('/posts', 'PostsController@index')->name('postsIndex');

	Route::get('/posts/{post}', 'PostsController@index')->name('postsShow');

});
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('pdfs', 'PdfsController');
	Route::post('/sendemail/send','SendEmailController@send');
	Route::resource('posts', 'PostsController');
	Auth::routes();


	