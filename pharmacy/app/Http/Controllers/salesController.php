<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sales;  
class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = sales::latest()->paginate(5);
        return view('sales.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'salesId'=>'required',
            'pharmaciesId' => 'required',
            'medicineId' => 'required',
            'qty' => 'required'

        ]);

        $form_data =array(
            'salesId'=>$request->salesId,
            'pharmaciesId' => $request->pharmaciesId,
            'medicineId' => $request->medicineId,
            'qty' => $request->qty
        );
        sales::create($form_data);
        return redirect('sales')->with('success','Successeded insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = sales::findOrFail($id);
        return view('sales.view', compact('data'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
    {
        $data = sales::findOrFail($id);
        return view('sales.edit', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'salesId'=>'required',
            'pharmaciesId' => 'required',
            'medicineId' => 'required',
            'qty' => 'required'

        ]);

        $form_data =array(
            'salesId'=>$request->salesId,
            'pharmaciesId' => $request->pharmaciesId,
            'medicineId' => $request->medicineId,
            'qty' => $request->qty
        );
        sales::whereId($id)->update($form_data);
        return redirect('sales')->with('success','Successed Update');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = sales::findOrFail($id);
        $data->delete();
        return redirect('sales')->with('success','Deleted');
    }
}
