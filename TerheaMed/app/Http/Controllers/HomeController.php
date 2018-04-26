<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicines;
use App\HealthTips;
use App\HealthTipsPictures;
use App\Tips;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$searchName='';
    	return view('pages.index', compact('searchName'));
    }

    public function search(Request $request)
    {
    	$searchName = null;
    	if ($request->searchName != null) 
    	{
    		$searchName = $request->searchName;
    	}
    	
    	return view('pages.index', compact('searchName'));
    }

    public function searchJson(Request $request)
    {
        $searchData = Medicines::where('name', 'LIKE', '%' . $request->searchName . '%')->orWhere('purpose', 'LIKE', '%' . $request->searchName . '%')->orWhere('generic_name', 'LIKE', '%' . $request->searchName . '%')->get();
        return $searchData;
    }

    public function getAllSimilarMedicine(Request $request)
    {
        return Medicines::where('generic_name', 'LIKE', '%' . $request->genericName . '%')->get();
    }

    public function about(Request $request)
    {
        $searchName='';
        return view('pages.about', compact('searchName'));
    }

    public function healthTips(Request $request)
    {
        $searchName='';
        $healthTips = HealthTips::all();
        return view('pages.health-tips', compact('searchName', 'healthTips'));
    }

    public function viewTip(Request $request)
    {
        $healthTip = HealthTips::find($request->key);
        $tips = Tips::where('health_tips_id', $request->key)->get();
        return view('pages.health-view-video', compact('healthTip', 'tips'));
    }
}
