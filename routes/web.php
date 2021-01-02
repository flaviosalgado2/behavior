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

Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar'
]);

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

/**
 * Route::verbo_http('URI', 'Controller@metodo');
 *
 * Route::get($uri, $callback);
 * Route::post($uri, $callback);
 * Route::put($uri, $callback);
 * Route::patch($uri, $callback);
 * Route::delete($uri, $callback);
 * Route::options($uri, $callback);
 */

/*Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');

Route::post('/postData', 'UserController@postData');

Route::put('/users/1', 'UserController@testPut');
Route::patch('/users/1', 'UserController@testPatch');

Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');

Route::delete('/users/5', 'UserController@ddestroy');

Route::any('/users', 'UserController@any');*/


//Route::resource('posts', 'PostController');
/*Route::resource('posts', 'PostController')->only(['index', 'show']);
Route::resource('posts', 'PostController')->except()(['destroy']);*/

Route::get('users', function (){
    echo "Listagem de Usuários!";
});

Route::view('/form', 'form');

Route::fallback(function (){
    echo "<h1>Ooops! Seja muito bem vindo. Erro 404. Nada encontrado para esta rota.</h1>";
});

Route::redirect('/users/add', url('/form'), 301);

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');


