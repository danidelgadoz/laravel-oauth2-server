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

Route::get('foo', function () {
    return response('Hello World');
});

Route::prefix('')->middleware('auth:api')->group(function () {
    Route::get('properties', function () {
        return response()->json([
            'APP_NAME' => env('APP_NAME'),
            'APP_ENV' => env('APP_ENV'),
            'APP_KEY' => env('APP_KEY'),
            'APP_DEBUG' => env('APP_DEBUG'),
            'APP_URL' => env('APP_URL')
        ]);
    });
});
