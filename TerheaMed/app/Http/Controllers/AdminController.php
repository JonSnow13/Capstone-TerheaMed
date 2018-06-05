<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicines;
use App\Contentmed;
use App\HealthTips;
use App\HealthTipsPictures;
use App\Tips;
use Yajra\Datatables\Datatables;
use File;

class AdminController extends Controller
{

    public function index(Request $request)
    {
    	return view('admin.index');
    }

    public function index2(Request $request)
    {
        return view('admin2.herbal');
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
        $medicineData->generic_name = $request->medInfoArray[0]['genericName'];
        $medicineData->key_word = $request->medInfoArray[0]['keyword'];

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

        return [
            'id' => $medicineData->id,
            'name' => $medicineData->name
        ];

    }

    public function getAllMedicineDataNonHerbal(Request $request)
    {
        $medicineDataNonHerbal = Medicines::where('category_id', 1);
        return Datatables::of($medicineDataNonHerbal)->make(true);
    }

    public function getAllMedicineDataHerbal(Request $request)
    {
        $medicineDataHerbal = Medicines::where('category_id', 2);
        return Datatables::of($medicineDataHerbal)->make(true);
    }

    public function getAllMedicineDataByCategory(Request $request)
    {
        $medicineData = Medicines::where('category_id', $request->key);
        return Datatables::of($medicineData)->make(true);
    }

    public function deleteMedicine(Request $request)
    {
        $medicineData = Medicines::find($request->medicine_id);
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
        $medicineData->generic_name = $request->medInfoArray[0]['genericName'];
        $medicineData->key_word = $request->medInfoArray[0]['keyword'];

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

    public function storeContentOfMedicine(Request $request)
    {
        for ($i=0; $i < count($request->contentArray) ; $i++) 
        { 
            $contentData = new Contentmed();
            $contentData->medicine_id = $request->medicine_id;
            $contentData->name = $request->contentArray[$i]['name'];
            $contentData->density = $request->contentArray[$i]['density'];

            if (strlen($contentData->name) != 0) 
            {
                $contentData->save();
            }
        }
    }

    public function getContentOfMedicine(Request $request)
    {
        $contentData = Contentmed::where('medicine_id', $request->medicine_id)->get();
        return $contentData;
    }

    public function addUpdateContentOfMedicine(Request $request)
    {
        for ($i=0; $i < count($request->newContentArray); $i++) 
        { 
            $contentData = new Contentmed();
            $contentData->medicine_id = $request->medicine_id;
            $contentData->name = $request->newContentArray[$i]['name'];
            $contentData->density = $request->newContentArray[$i]['density'];

            if (strlen($contentData->name) != 0) 
            {
                $contentData->save();
            }
        }

        for ($i=0; $i < count($request->oldContentArray); $i++) 
        { 
            $oldContentData = Contentmed::find($request->oldContentArray[$i]['id']);
            $oldContentData->name = $request->oldContentArray[$i]['name'];
            $oldContentData->density = $request->oldContentArray[$i]['density'];

            if (strlen($oldContentData->name) != 0) 
            {
                $oldContentData->update();
            }
        }
    }

    public function deleteContentOfMed(Request $request)
    {
        Contentmed::find($request->content_id)->delete();
    }

    public function storeHealthTips(Request $request)
    {
        $healthTips = new HealthTips();
        $healthTips->name = $request->healthTipsArray[0]['health_tip_name'];
        $healthTips->description = $request->healthTipsArray[0]['description'];
        $healthTips->tip_title = $request->healthTipsArray[0]['tip_title'];
        $healthTips->video_embed_code = $request->healthTipsArray[0]['yt_embed_code'];
        $healthTips->category_id = $request->healthTipsArray[0]['category_id'];

        $healthTips->save();

        return $healthTips->id;
    }

    public function storeTips(Request $request)
    {
        
        for ($i=0; $i < count($request->tipArray); $i++) 
        { 
            $tips = new Tips();
            $tips->health_tips_id = $request->healthTipsID;
            $tips->description = $request->tipArray[$i]['tip_description'];
            $tips->save();
        }

    }

    public function getAllHealthTips(Request $request)
    {
        $healthTips = HealthTips::where('category_id', 1)->get();
        return Datatables::of($healthTips)->make(true);
    }

    public function getAllHomeRemedy(Request $request)
    {
        $healthTips = HealthTips::where('category_id', 2)->get();
        return Datatables::of($healthTips)->make(true);
    }

    public function deleteHealthTipOrHomeRemedy(Request $request)
    {
        HealthTips::find($request->id)->delete();
    }

    public function adminLogin(Request $request)
    {
        return view('admin.login');
    }

}
