<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DateRangeController extends Controller
{
     public function index(Request $request)
    {
    	if (request()->ajax()) 
    	{
    		if (!empty($request->from_date)) {
    			
    		$data = DB::table('stores')
    			->whereBetween('proDate',array($request->from_date,$request->to_date)
    		)
    			->get();	
    		}
    	}
    	else{
    		$data = DB::table('stores')
    		->get();

    	}
    	return datatables()->of($data)->make(true);
    	return view('daterange'); 
    }
}
