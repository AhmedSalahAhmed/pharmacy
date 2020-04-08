<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pharmacist;

class pharmacistsController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pharmacist::latest()->paginate(5);
        return view('pharmacist.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);

        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request-> validate([
        'pharmacistName' => 'required',
        'phoneNum'       => 'required',
        'duration'       => 'required',
        'userName'       => 'required',
        'password'       => 'required'
        ]);
        $form_data = array(
        'pharmacistName' =>$request->pharmacistName,
        'phoneNum'       =>$request->phoneNum,
        'duration'    =>$request->duration,
        'userName'       =>$request->userName,
        'password'       =>$request->password
        );
        pharmacist::create($form_data);
        return redirect('pharmacist')->with('success','succsed insert');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = pharmacist::findOrFail($id);
        return view('pharmacist.view',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pharmacist::findOrFail($id);
        return view('pharmacist.edit',compact('data'));
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
                'id' =>'required',
                'pharmacistName' =>'required',
                'phoneNum' =>'required',
                'duration' =>'required',
                'userName' =>'required',
                'password' =>'required'
        ]);
        $form_data =array(
                'id' =>$request->id,
                'pharmacistName' =>$request->pharmacistName,
                'phoneNum' =>$request->phoneNum,
                'duration' =>$request->duration,
                'userName' =>$request->userName,
                'password' =>$request->password
        );
        pharmacist::whereId($id)->update($form_data);
        return redirect('pharmacist')->with('success','succsed Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = pharmacist::findOrFail($id);
        $data->delete();
        return redirect('pharmacist')->with('success','Deleted');
    }
}
