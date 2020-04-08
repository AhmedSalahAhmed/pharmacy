<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phsales;
class phsalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = phsales::latest()->paginate(5);
        return view('phsales.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phsales.create');
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
            'medicine' => 'required',
            'medType' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'durationsId' => 'required'

        ]);

        $form_data =array(
            'medicine' => $request->medicine,
            'medType' => $request->medType,
            'qty' => $request->qty,
            'price' => $request->price,
            'durationsId' => $request->durationsId
        );
        phsales::create($form_data);
        return redirect('phsales')->with('success','Successeded insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = phsales::findOrFail($id);
        return view('phsales.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = phsales::findOrFail($id);
        return view('phsales.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {/*
        $request->validate([
            'medType' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'durationsId' => 'required'

        ]);

        $form_data =array(
            'medType' => $request->medType,
            'qty' => $request->qty,
            'price' => $request->price,
            'durationsId' => $request->durationsId
        );
        phsales::whereId($id)->update($form_data);
        return redirect('phsales')->with('success','Successed Update');
        

        $request->validate([
                'medicine' =>'required',
                'medType' =>'required',
                'qty' =>'required',
                'durationsId' =>'required'
        ]);*/
        $form_data =array(
                'medicine' =>$request->medicine,
                'medType' =>$request->medType,
                'qty' =>$request->qty,
                'durationsId' =>$request->durationsId
        );
        phsales::whereId($id)->update($form_data);
        return redirect('phsales')->with('success','succsed Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = phsales::findOrFail($id);
        $data->delete();
        return redirect('phsales')->with('success','Deleted');
    }
}
