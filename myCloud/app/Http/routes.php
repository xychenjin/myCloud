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
require_once 'Routes/download.php';
require_once 'Routes/commute.php';
require_once 'Routes/admin.php';
require_once 'Routes/cart.php';
require_once 'Routes/wage.php';
require_once 'Routes/card.php';
require_once 'Routes/code.php';
require_once 'Routes/backward.php';
require_once 'Routes/memo.php';
require_once 'Routes/exercise.php';
require_once 'Routes/about.php';
require_once 'Routes/bonus.php';

Route::get('/', function () {
    return redirect('admin/');
});
