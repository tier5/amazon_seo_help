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

Route::get('/', function () {
    
    return view('index');
});

Route::get('dashboard', function () {
    return view('admin/dashboard');
});

/*Route::get('user', function () {
    return view('admin/user');
});*/
/*Route::get('userdetails', function () {
    return view('admin/userdetails');
});
Route::get('userpanel', function () {
    return view('admin/userpanel');
});*/
Route::get('dashboard',array('as'=>'/dashboard',function() {
            dd(get_template_directory_uri());
            return view('admin/dashboard');
}));
Route::get('user',array('as'=>'/user',function() {
            return view('admin/user');
}));
Route::get('userdetails',array('as'=>'/userdetails',function() {
            return view('admin/userdetails');
}));
Route::get('userpanel',array('as'=>'/userpanel',function() {
            return view('admin/userpanel');
}));
Route::get('profile',array('as'=>'/profile',function() {
            return view('admin/profile');
}));



/*Route::get('profileupdate',array('as'=>'/profileupdate',function() {
            return view('admin/profileupdate');
}));*/
Route::post('profileupdate',[
    'uses' => 'UserController@profileupdate',
    'as' => '/profileupdate'
]);
Route::post('passwordupdate',[
    'uses' => 'UserController@passwordupdate',
    'as' => '/passwordupdate'
]);
/*Route::post('dashboard',array('as'=>'/dashboard',function() {
            return view('admin/dashboard');
}));*/

Route::post('/login','UserController@login');
Route::post('/users','UserController@userDetails');
/*Route::post('/login', function () {
    return view('admin/dashboard');
});*/
Route::get('amazonppc',array('as'=>'/amazonppc',function() {
            return view('amazonppc');
}));
Route::get('/',array('as'=>'/',function() {
            return view('index');
}));
Route::get('register',array('as'=>'/register',function() {
            return view('register');
}));
Route::post('userregistration',[
    'uses' => 'UserController@userRegistration',
    'as' => '/userregistration'
]);

/*Route::get('/amazonppc', function () {
    return view('amazonppc');
});*/
