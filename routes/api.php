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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


$router->get('/values','ValueController@index');
$router->post('/values','ValueController@store')->name('storevalue');
$router->get('/values/{value}','ValueController@show')->name('showvalue');
$router->put('/values/{value}','ValueController@update')->name('updatevalue');
$router->patch('/values/{value}','ValueController@update');
$router->delete('/values/{value}','ValueController@destroy')->name('destroyvalue');
$router->post('/add','ValueController@add')->name('addvalues');
$router->post('/subtract','ValueController@subtract')->name('subtractvalues');
$router->post('/multiply','ValueController@multiply')->name('multiplyvalues');;
$router->post('/divide','ValueController@divide')->name('dividevalues');
$router->post('/square_root','ValueController@square_root')->name('squareroot');;