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
	'/getAllMedicineDataNonHerbal',
	'AdminController@getAllMedicineDataNonHerbal'
);

Route::get(
	'/getAllMedicineDataHerbal',
	'AdminController@getAllMedicineDataHerbal'
);

Route::get(
	'/search={searchName}',
	'HomeController@search'
);

Route::post(
	'/deleteMedicine',
	['as' => 'deleteMedicine','uses' => 'AdminController@deleteMedicine']
);

Route::get(
	'/search',
	['as' => 'json_search', 'uses' => 'HomeController@searchJson']
);

Route::post(
	'/json_update_medicine',
	['as' => 'json_update_medicine', 'uses' => 'AdminController@updateMedicine']
);

Route::post(
	'/json_add_content_to_medicine',
	['as' => 'json_add_content_to_medicine', 'uses' => 'AdminController@storeContentOfMedicine']
);

Route::get(
	'/json_get_content_of_medicine',
	['as' => 'json_get_content_of_medicine', 'uses' => 'AdminController@getContentOfMedicine']
);

Route::post(
	'/json_add_update_content_to_medicine',
	['as' => 'json_add_update_content_to_medicine', 'uses' => 'AdminController@addUpdateContentOfMedicine']
);

Route::get(
	'/delete_content_of_med',
	['as' => 'delete_content_of_med', 'uses' => 'AdminController@deleteContentOfMed']
);

Route::get(
	'/json_get_all_similar_medicine',
	['as' => 'json_get_all_similar_medicine', 'uses' => 'HomeController@getAllSimilarMedicine']
);
// Route::group(['middleware' => 'csrf'], function()
// {});