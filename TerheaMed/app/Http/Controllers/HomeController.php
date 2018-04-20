<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicines;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	$searchName='';
    	return view('layout.index', compact('searchName'));
    }

    public function search(Request $request)
    {
    	$searchName = null;
    	if ($request->searchName != null) 
    	{
    		$searchName = $request->searchName;
    	}
    	
    	return view('layout.index', compact('searchName'));
    }

    public function searchJson(Request $request)
    {
        $searchData = Medicines::where('name', 'LIKE', '%' . $request->searchName . '%')->orWhere('purpose', 'LIKE', '%' . $request->searchName . '%')->get();
        return $searchData;
    }

    public function getAllSimilarMedicine(Request $request)
    {
        return Medicines::where('generic_name', 'LIKE', '%' . $request->genericName . '%')->get();
    }
}
