<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requests;
class requestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = requests::latest()->paginate(5);
        return view('request.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request.create');
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
            'medicineId'=>'required',
            'rqty' => 'required',
            'rcompany' => 'required',
            'mtype' => 'required'

        ]);

        $form_data =array(
            'medicineId'=>$request->medicineId,
            'rqty' => $request->rqty,
            'rcompany' => $request->rcompany,
            'mtype' => $request->mtype
        );
        requests::create($form_data);
        return redirect('request')->with('success','Successeded insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = requests::findOrFail($id);
        return view('request.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = requests::findOrFail($id);
        return view('request.edit', compact('data'));
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
            'medicineId'=>'required',
            'rqty' => 'required',
            'rcompany' => 'required',
            'mtype' => 'required'

        ]);

        $form_data =array(
            'medicineId'=>$request->medicineId,
            'rqty' => $request->rqty,
            'rcompany' => $request->rcompany,
            'mtype' => $request->mtype
        );
        requests::whereId($id)->update($form_data);
        return redirect('request')->with('success','Successed Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = requests::findOrFail($id);
        $data->delete();
        return redirect('request')->with('success','Deleted');
    }
}
