<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pharmacy;
use DB;
class pharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = pharmacy::latest()->paginate(5);
        return view('pharmacy.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacy.create');
        
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('pharmacies')
        ->where('pharmaciesId' , 'like' ,'%' .$search. '%')
        ->orWhere('phName' , 'like' ,'%' .$search. '%')
        ->orWhere('address' , 'like' ,'%' .$search. '%')
        ->orWhere('phAdmin' , 'like' ,'%' .$search. '%')
        ->orWhere('email' , 'like' ,'%' .$search. '%')
        ->orWhere('password' , 'like' ,'%' .$search. '%')
        ->orWhere('phone' , 'like' ,'%' .$search. '%')
        ->paginate(5);
        return view('pharmacy.index',['data'=>$data]);
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
            'pharmaciesId' => 'required',
            'phName' => 'required',
            'address' => 'required',
            'phAdmin' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'

        ]);

        $form_data =array(
            'pharmaciesId' => $request->pharmaciesId,
            'phName' => $request->phName,
            'address' => $request->address,
            'phAdmin' => $request->phAdmin,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone
        );
        pharmacy::create($form_data);
        return redirect('pharmacy')->with('success','Successeded insert');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = pharmacy::findOrFail($id);
        return view('pharmacy.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = pharmacy::findOrFail($id);
        return view('pharmacy.edit', compact('data'));
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
            'pharmaciesId' => 'required',
            'phName' => 'required',
            'address' => 'required',
            'phAdmin' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required'

        ]);

        $form_data =array(
            'pharmaciesId' => $request->pharmaciesId,
            'phName' => $request->phName,
            'address' => $request->address,
            'phAdmin' => $request->phAdmin,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone
        );

        pharmacy::whereId($id)->update($form_data);
        return redirect('pharmacy')->with('success','Successed Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = pharmacy::findOrFail($id);
        $data->delete();
        return redirect('pharmacy')->with('success','Deleted');
    }
}
