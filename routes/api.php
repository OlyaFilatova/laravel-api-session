<?php

use Illuminate\Http\Request;

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
Route::post('session', function(Request $request) {
    session()->put('session_value', $_POST['session_value']);
    return json_encode($_POST['session_value']);
});
Route::get('session', function(Request $request) {
    return json_encode(session('session_value'));
});
