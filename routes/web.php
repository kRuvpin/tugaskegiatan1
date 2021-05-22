<?php
use App\Http\Controller\Homecontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home0083');
});
Route::get('/artikel0083', function () {
    return view('artikel0083');
});
Route::get('/contactus0083', function () {
    return view('contactus0083');
});
Route::get('/home', 'App\Http\Controller\Homecontroller@index' ) ;
