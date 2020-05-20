<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;
use App\store;
use Session;
class storesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index()
    {
        
        $data = store::latest()->paginate(5);
        return view('store.index',compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('store.create');
        
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
        'medicineId' => 'required',
        'medicine'       => 'required',
        'mType'       => 'required',
        'company'       => 'required',
        'qty'       => 'required',
        'price'       => 'required',
        'proDate'       => 'required',
        'exDate'       => 'required'
        ]);
        $form_data = array(
        'medicineId' =>$request->medicineId,
        'medicine'       =>$request->medicine,
        'mType'    =>$request->mType,
        'company'       =>$request->company,
        'qty'       =>$request->qty,
        'price'       =>$request->price,
        'proDate'       =>$request->proDate,
        'exDate'       =>$request->exDate
        );
        store::create($form_data);
        session::flash('statuscode','success');
        return redirect('store')->with('status','This Data Has Been Added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        DB::enableQueryLog();
        
        $data = store::findOrFail($id);
        return view('store.view',compact('data'));
        
        dd(DB::getQueryLog());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = store::findOrFail($id);
        return view('store.edit',compact('data'));
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
//        DB::enableQueryLog();
              $request->validate([
            'medicineId'=>'required',
            'medicine' => 'required',
            'mType' => 'required',
            'company' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'proDate' => 'required',
            'exDate' => 'required'

        ]);

        $form_data =array(
            'medicineId'=>$request->medicineId,
            'medicine' => $request->medicine,
            'mType' => $request->mType,
            'company' => $request->company,
            'qty' => $request->qty,
            'price' => $request->price,
            'proDate' => $request->proDate,
            'exDate' => $request->exDate
        );
        store::where('medicineId',$request->medicineId)->update($form_data);
        session::flash('statuscode','info');
        return redirect('store')->with('status','This Data Has Been Updated');
        //dd(DB::getQueryLog());
}








    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = store::findOrFail($id);
        $data->delete();
        session::flash('statuscode','error');
        return redirect('store')->with('status','This Data Has Been Deleted');
    
    }
}
