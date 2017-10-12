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


Route::group(['prefix' => 'unit'], function() {
    
    Route::get('/getUnit', function() {
        $getUnit = DB::table('UnitRumah as U')
                    ->select('U.kavling', 'U.blok', 'U.no_rumah', 'U.harga_rumah', 'U.luas_tanah', 'U.luas_bangunan')
                    ->get();
        return response()->json($getUnit, 200);
    });

    Route::post('/createUnit', 'ProductController@CreateUnit');
    Route::post('/deleteunit/{id}', 'ProductController@DeleteUnit');
    
});

