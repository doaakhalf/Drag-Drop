<?php

use App\Models\card;
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
    return view('welcome');
});
Route::get('/drag', function () {
    return view('drag4');
});
Route::get('/drag3', function () {
    $cards=card::all();
    $length=count($cards);
    return view('frontcard',compact('cards','length'));
});
Route::post('/saveData','App\Http\Controllers\DragDropController@store');