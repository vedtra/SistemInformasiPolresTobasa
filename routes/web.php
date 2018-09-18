<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('guest');

//Routing untuk authentifikasi
Route::group(['namespace' => 'auth'],function(){
    Route::post('/login','LoginController@login')->name('login');
    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');
    Route::post('/register','RegisterController@store');
});

// Routing untuk user level admin
Route::group(['prefix' => 'admin','middleware' => 'admin'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('admin.index',$this->data);
    });
    Route::get('/all', 'UserController@all');
    Route::get('/show', 'UserController@show');
    Route::get('/add','UserController@add');
    Route::post('/store', 'UserController@store');
    Route::get('/edit/{id}', 'UserController@edit');
    Route::post('/update/{id}', 'UserController@update');
    Route::post('/delete/{id}', 'UserController@delete');
});
Route::get('/add','UserController@add');
// Routing untuk user level basumda
Route::group(['prefix' => 'basumda','middleware' => 'basumda'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('basumda.index',$this->data);
    });
    Route::get('/', 'BasumdaController@index');
    Route::get('/show', 'BasumdaController@show');
    Route::post('/store', 'BasumdaController@store');
    Route::get('/detail/{id}', 'BasumdaController@detail');
    Route::get('/edit/{id}', 'BasumdaController@edit');
    Route::post('/update/{id}', 'BasumdaController@update');
    Route::post('/delete/{id}', 'BasumdaController@delete');
    Route::get('/add', 'BasumdaController@add');
    Route::get('/laporan', 'LaporanController@show');
    Route::post('/sv_lap', 'LaporanController@store');
    Route::post('/del_lap/{id}', 'LaporanController@delete');
    Route::get('/perencanaan', 'BasumdaController@perencanaan');
    Route::get('/show_perencanaan', 'BasumdaController@show_perencanaan');
    Route::get('/show_perencanaan/edit/{id}', 'BasumdaController@edit_perencanaan');
    Route::post('/show_perencanaan/update/{id}', 'BasumdaController@update_perencanaan');
    Route::get('/perencanaan/getPDF/{id}', 'BasumdaController@getPDF');
    Route::post('/perencanaan/delete/{id}', 'BasumdaController@rendel');
    Route::post('/perencanaan/store', 'BasumdaController@renstore');
});

// Routing untuk user level bagops
Route::group(['prefix' => 'bagops','middleware' => 'bagops'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('bagops.index',$this->data);
    });
    Route::get('/laporan', 'BagopsController@laporan');
    Route::post('/del_lap/{id}', 'BagopsController@delete_laporan');
    Route::get('/perencanaan', 'BagopsController@perencanaan');
    Route::get('/add_perencanaan', 'BagopsController@add_perencanaan');
    Route::post('/perencanaan/save', 'BagopsController@saveren');
    Route::get('/perencanaan/getPDF/{id}', 'BagopsController@getPDF');
    Route::get('/perencanaan/edit/{id}', 'BagopsController@editren');
    Route::post('/perencanaan/update/{id}', 'BagopsController@update_perencanaan');
});

// Routing untuk user level kapolres
Route::group(['prefix' => 'kapolres','middleware' => 'kapolres'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('kapolres.index',$this->data);
    });
    Route::get('/laporan', 'KapolresController@laporan');
    Route::get('/perencanaan', 'KapolresController@perencanaan');
    Route::get('/perencanaan/getPDF/{id}', 'KapolresController@getPDF');
    Route::get('/anggaran', 'KapolresController@anggaran');
});

// Routing untuk user level bagren
Route::group(['prefix' => 'bagren','middleware' => 'bagren'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('bagren.index',$this->data);
    });
    Route::get('/laporan', 'BagrenController@show_laporan');
    Route::get('/tulis_anggaran', 'BagrenController@tulis_anggaran');
    Route::post('/sv_lap', 'BagrenController@sv_lap');
    Route::get('/perencanaan', 'BagrenController@perencanaan');
    Route::get('/perencanaan/getPDF/{id}', 'BagrenController@getPDF');
    Route::post('/anggaran/save', 'BagrenController@anggaran_save');
    Route::post('/del_lap/{id}', 'BagrenController@delete');
    Route::post('/tambahanggarans', 'BagrenController@store');
    Route::get('/anggaran', 'BagrenController@show_anggaran');
});
Route::resource('hapusanggaran', 'BagrenController@destroy');

// Routing untuk user level sium
Route::group(['prefix' => 'sium','middleware' => 'sium'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('sium.indexe',$this->data);
    });
    Route::get('/index', 'SKCKController@index');
    Route::get('/data', 'SKCKController@pemohonskck');
    Route::get('/konf/{id}', 'SKCKController@konf');
    Route::get('/laporan', 'SKCKController@show_laporan');
    Route::post('/sv_lap', 'SKCKController@sv_lap');
    Route::post('/del_lap/{id}', 'SKCKController@delete');
    Route::resource('updatesium', 'SKCKController@updates');
});
Route::resource('tampilkanskck', 'SKCKController@show');
Route::resource('hapusskck', 'SKCKController@destroy');

//Routing untuk user level pemohon
Route::get('pemohon/index', 'SKCKController@index');
Route::get('createskck', 'SKCKController@createskck');
Route::post('tambahskck/saveskck', 'SKCKController@create');
Route::resource('skck', 'SKCKController@skck');
Route::resource('pencarian', 'SKCKController@pencarian');
Route::resource('updateskck', 'SKCKController');
Route::resource('editskck', 'SKCKController@editskck');
Route::resource('datapdf', 'PDFController@datapdf');
Route::resource('pdf', 'PDFController@getpdff');
Route::resource('pdff', 'PDFController');
Route::resource('halskck', 'SKCKController@halpemohon');

//Routing untuk user level reserse
Route::group(['prefix' => 'reserse','middleware' => 'reserse'], function() {
    Route::get('/', function () {
        $this->data['title'] = 'Dashboard';
        return view('reserse.index',$this->data);
    });
    Route::get('/', 'ReserseController@index');
    Route::get('/add_kasus', 'ReserseController@create');
    Route::get('/data_kasus', 'ReserseController@show');
    Route::post('/savekasus', 'ReserseController@simpankasus');
});
Route::resource('hapuskasus', 'ReserseController@destroy');
Route::resource('tampilkankasus', 'ReserseController@tampil');