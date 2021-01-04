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

/*Route::get('users', function (){
    echo "Listagem de Usuários!";
});

Route::view('/form', 'form');

Route::fallback(function (){
    echo "<h1>Ooops! Seja muito bem vindo. Erro 404. Nada encontrado para esta rota. Por favor tente outra.</h1>";
});

Route::redirect('/users/add', url('/form'), 301);

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');*/

//Route::get('/users/{id}/comments/{comments}', 'UserController@userComments')->where(['id' => '[0-9]+', 'comment' => '[a-zA-Z]']);

//Route::get('/users/1', 'UserController@inspect')->name('inspect');

//grupo de rotas
/*Route::prefix('admin')->group(function () {
    Route::view('/form', 'form');
});

Route::name('admin.posts.')->group(function () {
    Route::get('/admin/posts/index', 'PostController@index')->name('index');
    Route::get('/admin/posts', 'PostController@show')->name('show');
});

//bloqueia requisicoes acima de 10 em 1 minuto
Route::middleware(['throttle:10,1'])->group(function () {
    Route::view('/form', 'form');
});

Route::namespace('Admin')->group(function () {
    Route::get('/users', 'UserController@index');
});*/

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['throttle:10,1'], 'as' => 'admin.'], function () {
    Route::resource('users', 'UserController');
});


