<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicines;
use App\HealthTips;
use App\Contentmed;
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
        $searchKey = explode(' ', $request->searchName);
        $searchData = array();

        $tempMed = Medicines::where('name', 'LIKE', '%' . $request->searchName . '%')->orWhere('generic_name', 'LIKE', '%' . $request->searchName . '%')->orWhere('key_word', 'LIKE', '%' . $request->searchName . '%')->get()->toArray();
        $searchData = array_merge($searchData, $tempMed);
        
        foreach ($searchKey as $value) 
        {

            $hasConjuction = $this->hasConjuction($value);
            if (!empty($value) == !$hasConjuction) 
            {
                $tempArr = Medicines::where('name', 'LIKE', '%' . $value . '%')->orWhere('generic_name', 'LIKE', '%' . $value . '%')->orWhere('key_word', 'LIKE', '%' . $value . '%')->get()->toArray();

                $searchData = array_merge($searchData, $tempArr);

            }
        }

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
        $healthTipsHomeRemedy = HealthTips::where('category_id', 1)->get();
        return view('pages.health-tips', compact('searchName', 'healthTipsHomeRemedy'));
    }

    public function viewTip(Request $request)
    {
        $healthTip = HealthTips::find($request->key);
        $tips = Tips::where('health_tips_id', $request->key)->get();
        return view('pages.health-view-video', compact('healthTip', 'tips'));
    }

    public function homeRemedy(Request $request)
    {
        $searchName='';
        $healthTipsHomeRemedy = HealthTips::where('category_id', 2)->get();
        return view('pages.health-tips', compact('searchName', 'healthTipsHomeRemedy'));
    }

    public function viewmed(Request $request)
    {
        $searchName = '';
        $similarMedHer =  array();
        $specsMedData = Medicines::find($request->id);
        
        if ($specsMedData->category_id == 1) 
        {
            $genericKey = explode(' ', $specsMedData->generic_name);
            foreach ($genericKey as $value) 
            {
                if (!empty($value)) 
                {
                    $tempArr = Medicines::where('generic_name', 'LIKE', '%' . $value . '%')->get()->toArray();
                    $similarMedHer = array_merge($similarMedHer, $tempArr);
                }
            }

        }
        else
        {
            $similarMedHer = Medicines::where('category_id', 2)->get();
        }

        $contentMedHer = Contentmed::where('medicine_id', $specsMedData->id)->get();

        return view('pages.view-med-new-tab', compact('searchName', 'specsMedData', 'similarMedHer', 'contentMedHer'));
    }

    public function healthTipsSearch(Request $request)
    {
        $searchName = $request->searchName;
        $healthTipsHomeRemedySearched = array();
        $searchKey = explode(' ', $request->searchName);

        foreach ($searchKey as $value) 
        {
            $hasConjuction = $this->hasConjuction($value);

            if (!empty($value) && !$hasConjuction) 
            {
                $tempArr = HealthTips::where('name', 'LIKE', '%' . $value . '%')->orWhere('tip_title', 'LIKE', '%' . $value . '%')->where('category_id', 1)->get()->toArray();
                $healthTipsHomeRemedySearched = array_merge($healthTipsHomeRemedySearched, $tempArr);
            }
        }

        $healthTipsHomeRemedy = HealthTips::where('category_id', 1)->get()->toArray();
        return view('pages.health-tips', compact('searchName', 'healthTipsHomeRemedySearched', 'healthTipsHomeRemedy'));

    }

    public function homeRemedySearch(Request $request)
    {
        $searchName = $request->searchName;
        $healthTipsHomeRemedySearched = array();
        $searchKey = explode(' ', $request->searchName);

        foreach ($searchKey as $value) 
        {
            $hasConjuction = $this->hasConjuction($value);

            if (!empty($value) && !$hasConjuction) 
            {
                $tempArr = HealthTips::where('name', 'LIKE', '%' . $value . '%')->orWhere('tip_title', 'LIKE', '%' . $value . '%')->where('category_id', 2)->get()->toArray();
                $healthTipsHomeRemedySearched = array_merge($healthTipsHomeRemedySearched, $tempArr);
            }
        }

        $healthTipsHomeRemedy = HealthTips::where('category_id', 2)->get()->toArray();
        return view('pages.health-tips', compact('searchName', 'healthTipsHomeRemedySearched', 'healthTipsHomeRemedy'));
    }

    private function hasConjuction($word)
    {
        $conjunction = array("for", "and", "with", "or", "to", "is", "for");
        foreach ($conjunction as $value) 
        {
            if ($value == $word) 
            {
                return true;
            }
        }
        return false;
    }
}
