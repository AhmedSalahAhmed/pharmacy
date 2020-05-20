@extends('mngNav')
@section('main')


<div class="text-right">
	<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-success mb-3">Add New Medicine </a>
</div>

    <table id="datatable" class="table text-center table-bordered table-striped">
        <thead>
            <tr>
                <th scoop="col">رقم الدواء</th>
                <th scoop="col">اسم الدواء</th>
                <th scoop="col"> نوع الدواء</th>
                <th scoop="col">الشركة</th>
                <th scoop="col">الكمية</th>
                <th scoop="col">سعر البيع</th>
                <th scoop="col">تاريخ الانتاج</th>
                <th scoop="col">تاريخ الانتهاء</th>
                <th scoop="col">عمليات</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
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



<div id="addModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header"> 
    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                        <form method="post" action="{{route('store.store')}}" enctype="multipart/form-data">
						@csrf
                            <table class="modalTable table text-center">
                                <tr>
                                    <td class="captionTd"> رقم المنتج </td>
                                    <td class="fromTd" >
                                        <input type="text" name="medicineId" class="modalInputs form-control"/>                                                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> اسم المنتج </td>
                                    <td class="fromTd">
                                        <input type="text" name="medicine"  class="modalInputs form-control"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                        <td class="captionTd"> نوع المنتج </td>
                                    <td class="fromTd">
                                        <input type="text"  name="mType" class="form-control modalInputs"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الشركة </td>
                                    <td class="fromTd">
                                        <input type="text" name="company" class="form-control modalInputs"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الكمية </td>
                                    <td class="fromTd">
                                        <input type="text" name="qty" class="form-control modalInputs"/>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> سعر المنتج  </td>
                                    <td class="fromTd">
                                        <input type="text" name="price" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> تاريخ الانتاج  </td>
                                    <td class="fromTd">
                                        <input type="text" name="proDate" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> تاريخ الانتهاء  </td>
                                    <td class="fromTd">
                                        <input type="text" name="exDate" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                            </table>
						    <button class="btn form-control btn-info"> Add Data</button> 							
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>

       
       <!--       **********************     --> 


    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header"> 
    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                        <form method="post" id="editForm" action="/store" enctype="multipart/form-data">
						@csrf
                        @method('PATCH')
                            <table class="modalTable table text-center">
                                <tr>
                                    <td class="captionTd"> رقم المنتج </td>
                                    <td class="fromTd" >
                                        <input type="text" name="medicineId" id="mednum" class="modalInputs form-control"/>                                                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> اسم المنتج </td>
                                    <td class="fromTd">
                                        <input type="text" name="medicine" id="medname" class="modalInputs form-control"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                        <td class="captionTd"> نوع المنتج </td>
                                    <td class="fromTd">
                                        <input type="text" id="medtype" name="mType" class="form-control modalInputs"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الشركة </td>
                                    <td class="fromTd">
                                        <input type="text" id="medcom" name="company" class="form-control modalInputs"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الكمية </td>
                                    <td class="fromTd">
                                        <input type="text" id="medqty" name="qty" class="form-control modalInputs"/>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> سعر المنتج  </td>
                                    <td class="fromTd">
                                        <input type="text" id="medprice" name="price" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> تاريخ الانتاج  </td>
                                    <td class="fromTd">
                                        <input type="text" id="meddate" name="proDate" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> تاريخ الانتهاء  </td>
                                    <td class="fromTd">
                                        <input type="text" id="medexp" name="exDate" class="form-control modalInputs"/>                            
                                    </td>
                                </tr>
                            </table>
						    <button class="btn form-control btn-info"> Update Data</button> 							
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>

     <!-- ********** -->

      <!-- <div> "ماب   1   الورديه"  </div>   -->

@endsection