@extends('store.mngNav')
@section('main')
@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<div class="text-right">
	<a href="{{route('store.create')}}" class="btn btn-success mb-3">Add New Medicine </a>
</div>

<!--Comment!-->  
 <table border="2" id="datatable" class="table text-center table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">رقم الدواء</th>
                <th scope="col">إسم الدواء</th>
                <th scope="col"> نوع الدواء</th>
                <th scope="col">الشركة</th>
                <th scope="col">الكمية</th>
                <th scope="col">سعر البيع</th>
                <th scope="col">تاريخ الانتاج</th>
                <th scope="col">تاريخ الانتهاء</th>
                <th scope="col">عمليات</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th scope="col">رقم الدواء</th>
                <th scope="col">إسم الدواء</th>
                <th scope="col"> نوع الدواء</th>
                <th scope="col">الشركة</th>
                <th scope="col">الكمية</th>
                <th scope="col">سعر البيع</th>
                <th scope="col">تاريخ الانتاج</th>
                <th scope="col">تاريخ الانتهاء</th>
                <th scope="col">عمليات</th>
            </tr>
        </tfoot>

        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$row->medicineId}}</td>
                <td>{{$row->medicine}}</td>
                <td>{{$row->mType}}</td>
                <td>{{$row->company}}</td>
                <td>{{$row->qty}}</td>
                <td>{{$row->price}}</td>
                <td>{{$row->proDate}}</td>
                <td>{{$row->exDate}}</td>
                <td><a href="{{route('store.show',$row->id)}} " class="btn btn-primary">Show</a>
                    <a href="#" data-toggle="modal" data-target="#editModal" class="edit btn btn-warning">Edit</a>
                    <form action="{{route('store.destroy',$row->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
{!!$data->links()!!}


    <button class="btn btn-success"  data-toggle="modal" data-target="#mymodal" class="btn btn-info" > تعديل</button>
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header"> 
    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                        <form method="post" id="editForm" action="store.update" enctype="multipart/form-data">
						@csrf
                        @method('PATCH')
                        
                            <table class="modalTable table text-center">
                                <tr>
                                    <td class="captionTd"> رقم المنتج </td>
                                    <td class="fromTd" >
                                        <input type="text" id="mednum" class="modalInputs form-control"/>                                                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> اسم المنتج </td>
                                    <td class="fromTd">
                                        <input type="text" id="medname" class="modalInputs form-control"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                        <td class="captionTd"> نوع المنتج </td>
                                    <td class="fromTd">
                                        <input type="text" id="medtype" class="form-control modalInputs"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الشركة </td>
                                    <td class="fromTd">
                                        <input type="text" id="medcom" class="form-control modalInputs"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الكمية </td>
                                    <td class="fromTd">
                                        <input type="text" id="medqty" class="form-control modalInputs"/>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> سعر المنتج  </td>
                                    <td class="fromTd">
                                        <input type="text" id="medprice" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> تاريخ الانتاج  </td>
                                    <td class="fromTd">
                                        <input type="text" id="meddate" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> تاريخ الانتهاء  </td>
                                    <td class="fromTd">
                                        <input type="text" id="medexp" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                            </table>
							
						</form>
						    <button class="btn form-control btn-info"> Update Data</button> 
						 
					</div>
				</div>
	        </div>				    
	    </div>


        
   
    
      <div> "ماب   1   الورديه"  </div>  

@endsection