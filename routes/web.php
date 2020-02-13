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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('session', function(Request $request) {
    return json_encode(session('session_value'));
});
Route::get('send-session', function(Request $request) {
    $val = $_REQUEST['session_value'];
    session()->put('session_value', $val);
    return json_encode($val);
});
