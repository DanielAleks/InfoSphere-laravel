<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);

Route::apiResource('todos', TodoController::class)->middleware('auth:sanctum');

// Am I suppoused to put web.php code here for api requests?
// Route::get('/', 'App\Http\Controllers\PostsController@index');
// Route::get('/', 'App\Http\Controllers\PostsController@create');
// Route::post('/', 'App\Http\Controllers\PostsController@store');
// Route::get('/', function () {
//     return view('posts', [
//         'posts' => Post::all()
//     ]);
// });
// Route::patch('/{id}', 'App\Http\Controllers\PostsController@update');
// Route::delete('/{id}', 'App\Http\Controllers\PostsController@delete');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



