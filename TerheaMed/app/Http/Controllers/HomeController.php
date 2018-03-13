<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
