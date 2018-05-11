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
	'/seebigmap',
	'HomeController@index'
);

Route::get(
	'/home',
	'HomeController@index'
);

Route::get(
	'/viewmed/{id}',
	'HomeController@viewmed'
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

Route::get(
	'/about',
	'HomeController@about'
);

Route::get(
	'/homeremedy',
	'HomeController@homeRemedy'
);

Route::get(
	'/healthtips',
	'HomeController@healthTips'
);

Route::get(
	'/healthtips={searchName}',
	'HomeController@healthTipsSearch'
);

Route::get(
	'/homeremedy={searchName}',
	'HomeController@homeRemedySearch'
);

Route::get(
	'/view/{key}',
	'HomeController@viewTip'
);

Route::get(
	'admin2',
	'AdminController@index2'
);

Route::post(
	'/json_add_health_tips',
	['as' => 'json_add_health_tips', 'uses' => 'AdminController@storeHealthTips']
);

Route::post(
	'/json_add_tips',
	['as' => 'json_add_tips', 'uses' => 'AdminController@storeTips']
);

Route::get(
	'/getAllHealthTips',
	['as' => 'getAllHealthTips', 'uses' => 'AdminController@getAllHealthTips']
);

Route::get(
	'/getAllHomeRemedy',
	['as' => 'getAllHomeRemedy', 'uses' => 'AdminController@getAllHomeRemedy']
);

Route::get(
	'/json_delete_healthtips_homeremedy',
	['as' => 'json_delete_healthtips_homeremedy', 'uses' => 'AdminController@deleteHealthTipOrHomeRemedy']
);

Route::get(
	'/admin-login',
	'AdminController@adminLogin'
);

// Route::group(['middleware' => 'csrf'], function()
// {});