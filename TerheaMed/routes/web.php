<?php
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get(
	'/',
	'HomeController@index'
	);

Route::get(
	'/admin',
	'AdminController@index'
);

Route::post(
	'/saveMedInfo',
	['as' => 'json_add_medicine', 'uses' => 'AdminController@create']
);

Route::get(
	'/getAllMedicineData',
	'AdminController@getAllMedicineData'
);

Route::get(
	'/search={searchName}',
	'HomeController@search'
);

Route::post(
	'/deleteMedicine',
	['as' => 'deleteMedicine','uses' => 'AdminController@deleteMedicine']
);

// Route::group(['middleware' => 'csrf'], function()
// {});