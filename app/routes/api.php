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


Route::get('amazonseo',array('as'=>'/amazonseo',function() {
            return view('admin/profile');
}));

Route::post('login',[
    'uses' => 'UserController@login',
    'as' => 'login'
]);
Route::get('dashboard',array('as'=>'/dashboard',function() {
            return view('admin/dashboard');
}));

Route::get('seoservice',[
    'uses' => 'APIController@seoservice',
    'as' => '/seoservice'
]);
/*Route::group(['middleware' => 'jwt.auth'], function () {
    Route::post('login',[
    'uses' => 'UserController@login',
    'as' => '/login'
]);
});*/


//Route::post('/login','UserController@login');
/*Route::middleware('auth:api')->get('dashboard',array('as'=>'/dashboard',function() {
return view('admin/dashboard');
}));*/