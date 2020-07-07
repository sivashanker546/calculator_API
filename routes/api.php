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

$router->post('/save','ValueController@save')->name('storevalue');
$router->get('/savedValue','ValueController@savedValue')->name('showvalue');
$router->get('/clear','ValueController@clear')->name('clearvalue');
$router->post('/add','ValueController@add')->name('addvalues');
$router->post('/subtract','ValueController@subtract')->name('subtractvalues');
$router->post('/multiply','ValueController@multiply')->name('multiplyvalues');;
$router->post('/divide','ValueController@divide')->name('dividevalues');
$router->post('/square_root','ValueController@square_root')->name('squareroot');