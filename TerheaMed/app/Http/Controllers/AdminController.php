<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;

class AdminController extends Controller
{

    public function index(Request $request)
    {
    	return view('admin.index');
    }

    public function create(Request $request)
    {
    	dd($request);
    	// $medicineData = new Medicine();
    	// $medicineData->category_id = $request->medInfoArray[0]['type'];
    	// $medicineData->name = $request->medInfoArray[0]['name'];
    	// $medicineData->brand_name = $request->medInfoArray[0]['brandName'];
    	// $medicineData->desc = $request->medInfoArray[0]['desc'];
    	// $medicineData->purpose = $request->medInfoArray[0]['purpose'];
    	// $medicineData->takers = json_encode(['takers' => $request->medInfoArray[0]['takers'], 'age' => $request->medInfoArray[0]['age']]);
    	// $medicineData->untakers = $request->medInfoArray[0]['untakers'];
    	// $medicineData->how_to_take = $request->medInfoArray[0]['directionOfUse'];

    	// if (isset($request->medInfoArray[0]['picture'])) 
    	// {
    	// 	$imgname = str_random(20) . time() . 'jpg';
    	// 	$base64 = substr($request->medInfoArray[0]['picture'], strpos($request->medInfoArray[0]['picture'], ',')+1);
    	// 	file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64));

    	// 	$medicineData->picture = '/uploads/' . $imgname;
    	// }
    	// else
    	// {
    	// 	$medicineData->picture = 'assets/images/default_image.png';
    	// }

    	// $medicineData->save();

    }

}
