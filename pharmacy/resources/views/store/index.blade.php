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


<!-- <table class="table table-bordered table-striped">
	<tr>
		<th>Medicine Id</th>
		<th>Medicine</th>
		<th>Medicine Type</th>
		<th>Company</th>
		<th>Quantaty</th>
		<th>Price</th>
		<th>Production Date</th>
		<th>Expiration Date</th>
		<th>Action</th>

		
	</tr>
 -->

    <table border="2" id="datatable" class="table text-center table-bordered table-striped">
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



       <!--  
   <td > <button class="btn btn-info"  data-toggle="modal" data-target="#mymodal" class="btn btn-info" > اضافه</button>
        <div id="mymodal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-header"> 
        <button class="close" data-dismiss="modal" > &times;</button>
        <h3><i class="modal-title"> WELCOME TO ADD BAGE </i> </h3>
                    </div>
                        <div class="modal-body"> 
                            
                                <form class="form-group">
                                    <p>
                                رقم الدواء :<input class="form-control" type="text">
                                        <br>
                                        <p>
                     
                      اسم الدواء:<input class="form-control" type="text">
                   <br>
                   <p>

                      نوع الدواء:<input class="form-control" type="text">
                   <br>
                   <p>
                      كمية الدواء:<input class="form-control" type="text">
                   <br>
                   <p>

                        تاريخ الانتاج:<input class="form-control" type="text"></form>

<br>
<p>

                       تاريخ الانتهاء :<input class="form-control" type="text"></form>
                سعر البيع:<input class="form-control" type="text">
                      <br>
                      <p>
            الشركه:<input class="form-control" type="text"></form>

            <br>
            <p>
                    <button class="btn form-control btn-info"> ADD</button>       
                        </div> 
                           
        
                                
                       
                    
                </div>
            </div>
        --> 
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

     <!-- <button class="btn btn-danger" button data-toggle="modal" data-target="#mymodal" class="btn btn-info" > حذف</button>
     <div id="mymodal" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content"> 
                 <div class="modal-header"> 
     <button class="close" data-dismiss="modal" > &times;</button>
     <h3><i class="modal-title"> WELCOME TO ADD BAGE</i> </h3>
                 </div>
                     <div class="modal-body"> 
                            <form class="form-group">
                                <p>
                                    اسم الدواء:<input type="text" class="form-control"/>
                                    <br>
                 <p>
                  اسم الدواء  : <input type="text" class="form-control"/>
               <br>
               <p>
                  اسم الدواء  : <input type="text"class="form-control"/>
               <br>
               <p>
                  اسم الدواء:  <input type="text"class="form-control"/>
               <br>
               <p>

                  اسم الدواء:  <input type="text"class="form-control"/>
                  <br>
                  <p>
                  اسم الدواء:<input type="text" class="form-control"/><br></form>
                  <br>
                  <p> 
                  <button class="btn form-control btn-info"> ADD</button>
                     </div> 
                        
                    
                 
             </div>
         </div>
     
     </div> 
 -->
    





        
   
    
      <!-- <div> "ماب   1   الورديه"  </div>   -->

@endsection