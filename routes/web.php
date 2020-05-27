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
    return view('welcome');
});

Auth::routes();
Route::get('/login/admin', 'Auth\LoginController@showadminLoginForm')->name('adminlogin');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::group(['middleware' => ['auth.admin']], function () {
    // login protected routes.
    Route::get('/admin','AdminController@index')->name('adminhome');
    Route::get('/admin/getmembers','AdminController@getmembers');
    Route::post('/admin/deletemember/{id}','AdminController@deletemember');
    Route::post('/admin/addmembers','AdminController@addmembers');
    Route::post('/admin/updatemembers','AdminController@updatemembers');
    Route::get('/admin/flats','AdminController@flatview')->name('manageflat');
    Route::get('/admin/getflats','AdminController@getflats');
    Route::post('/admin/addflats','AdminController@addflats');
    Route::post('/admin/deleteflat/{fid}','AdminController@deleteflat');
    Route::post('/admin/updateflats','AdminController@updateflats');
    Route::get('/admin/managefamily','AdminController@managefamily')->name('managefamily');
    Route::post('/admin/getfloordetails/{fV}','AdminController@getfloordetails');
    Route::post('/admin/createmembers','AdminController@createMember');
    Route::post('/admin/getfamilymembers/{floo_num}/{flat_num}','AdminController@getfamilymembers');
    
});
//Route::get('/home', 'HomeController@index')->name('home');
