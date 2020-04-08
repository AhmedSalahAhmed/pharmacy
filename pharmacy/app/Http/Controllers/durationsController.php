<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\duration;

class durationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = duration::latest()->paginate(5);
        return view('duration.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duration.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'pharmacistsId' =>'required',
            'durStart' => 'required',
            'durEnd' => 'required',
            'durIncome' => 'required'

        ]);

        $form_data =array(
            'pharmacistsId' => $request->pharmacistsId,
            'durStart' => $request->durStart,
            'durEnd' => $request->durEnd,
            'durIncome' => $request->durIncome
        );
        duration::create($form_data);
        return redirect('duration')->with('success','Successeded insert');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = duration::findOrFail($id);
        return view('duration.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $data = duration::findOrFail($id);
        return view('duration.edit', compact('data'));
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
            'pharmacistsId' =>'required',
            'durStart' => 'required',
            'durEnd' => 'required',
            'durIncome' => 'required'

        ]);*/

        $form_data =array(
            'pharmacistsId' => $request->pharmacistsId,
            'durStart' =>$request->durStart,
            'durEnd' =>$request->durEnd,
            'durIncome' =>$request->durIncome
        );
        duration::whereId($id)->update($form_data);
        return redirect('duration')->with('success','Successed Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = duration::findOrFail($id);
        $data->delete();
        return redirect('duration')->with('success','Deleted');
    }
}
