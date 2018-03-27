<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicines;
use Yajra\Datatables\Datatables;
use File;

class AdminController extends Controller
{

    public function index(Request $request)
    {
    	return view('admin.index');
    }

    public function create(Request $request)
    {
    	// dd($request);
    	$medicineData = new Medicines();
    	$medicineData->category_id = $request->medInfoArray[0]['type'];
    	$medicineData->name = $request->medInfoArray[0]['name'];
    	$medicineData->brand_name = $request->medInfoArray[0]['brandName'];
    	$medicineData->desc = $request->medInfoArray[0]['desc'];
    	$medicineData->purpose = $request->medInfoArray[0]['purpose'];
    	$medicineData->direction_of_use = $request->medInfoArray[0]['directionOfUse'];
        $medicineData->warningMsg = $request->medInfoArray[0]['warning'];
        $medicineData->side_effect = $request->medInfoArray[0]['sideEffects'];
        $medicineData->format = json_encode(['format' => $request->medInfoArray[0]['format'], 'prescription_required' => $request->medInfoArray[0]['prescription']]);

    	if (isset($request->medInfoArray[0]['picture'])) 
    	{
    		$imgname = str_random(20) . time() . '.jpg';
    		$base64 = substr($request->medInfoArray[0]['picture'], strpos($request->medInfoArray[0]['picture'], ',')+1);
    		file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64));

    		$medicineData->picture = 'uploads/' . $imgname;
    	}
    	else
    	{
    		$medicineData->picture = 'assets/images/default_image.png';
    	}

    	$medicineData->save();

    }

    public function getAllMedicineData(Request $request)
    {
        $medicineData = Medicines::all();
        return Datatables::of($medicineData)->make(true);
    }

    public function deleteMedicine(Request $request)
    {
        $medicineData = Medicines::find($request->medcine_id);
        $picture = str_replace('uploads/', '', $medicineData->picture);
        File::delete(public_path('uploads/') . $picture);
        $medicineData->delete();
    }

    public function updateMedicine(Request $request)
    {
        $medicineData = Medicines::find($request->medcineId);
        $medicineData->category_id = $request->medInfoArray[0]['type'];
        $medicineData->name = $request->medInfoArray[0]['name'];
        $medicineData->brand_name = $request->medInfoArray[0]['brandName'];
        $medicineData->desc = $request->medInfoArray[0]['desc'];
        $medicineData->purpose = $request->medInfoArray[0]['purpose'];
        $medicineData->direction_of_use = $request->medInfoArray[0]['directionOfUse'];
        $medicineData->warningMsg = $request->medInfoArray[0]['warning'];
        $medicineData->side_effect = $request->medInfoArray[0]['sideEffects'];
        $medicineData->format = json_encode(['format' => $request->medInfoArray[0]['format'], 'prescription_required' => $request->medInfoArray[0]['prescription']]);

        if (isset($request->medInfoArray[0]['picture'])) 
        {
            $temp = explode("/", $request->medInfoArray[0]['picture']);
            if ($temp[0] != 'uploads' && $temp[0] != 'assets') {
                $imgname = str_random(20) . time() . '.jpg';
                $base64 = substr($request->medInfoArray[0]['picture'], strpos($request->medInfoArray[0]['picture'], ',')+1);
                file_put_contents(public_path() . '/uploads/' . $imgname, base64_decode($base64));

                $medicineData->picture = 'uploads/' . $imgname;
            }
        }
        else
        {
            $medicineData->picture = 'assets/images/default_image.png';
        }

        $medicineData->update();

    }

}
