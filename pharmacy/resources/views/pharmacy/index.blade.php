@extends('mngNav')
@section('main')
@if($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{$message}}</p>
</div>
@endif

<div class="text-right">
	<a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-success mb-3">Add New Pharmacy</a>
</div>

<table id="datatable" class="table table-bordered text-center table-striped">
	<thead>
		<tr>
			<th scoop="col">رقم الصيدلية</th>
			<th scoop="col">اسم الصيدلية</th>
			<th scoop="col">موقع الصيدلية</th>
			<th scoop="col">مدير الصيدلية</th>
			<th scoop="col">ايميل الصيدلية</th>
			<th scoop="col">الرقم السري</th>
			<th scoop="col">رقم الهاتف</th>
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
		<td>{{$row->pharmaciesId}}</td>
		<td>{{$row->phName}}</td>
		<td>{{$row->address}}</td>
		<td>{{$row->phAdmin}}</td>
		<td>{{$row->email}}</td>
		<td>{{$row->password}}</td>
		<td>{{$row->phone}}</td>
		<td><a href="{{route('pharmacy.show',$row->id)}} " class="btn btn-primary">Show</a>
			<a href="#" data-toggle="modal" data-target="#editModal" class="edit btn btn-warning">Edit</a>
			<form action="{{route('pharmacy.destroy',$row->id)}}" method="post">
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
                        <form method="post" action="{{route('pharmacy.store')}}" enctype="multipart/form-data">
						@csrf
                            <table class="modalTable table text-center">
                                <tr>
                                    <td class="captionTd"> رقم الصيدلية </td>
                                    <td class="fromTd" >
                                        <input type="number" name="pharmaciesId" class="modalInputs form-control" required/>                                                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> اسم الصيدلية </td>
                                    <td class="fromTd">
                                        <input type="text" name="phName"  class="modalInputs form-control" required/>                                    
                                    </td>
                                </tr>
                                <tr>
                                        <td class="captionTd"> العنوان </td>
                                    <td class="fromTd">
                                        <input type="text"  name="address" class="form-control modalInputs" required/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> المدير </td>
                                    <td class="fromTd">
                                        <input type="text" name="phAdmin" class="form-control modalInputs" required/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الايميل </td>
                                    <td class="fromTd">
                                        <input type="email" name="email" class="form-control modalInputs" required/>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> كلمة المرور  </td>
                                    <td class="fromTd">
                                        <input type="password" name="password" class="form-control modalInputs" required/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> رقم الهاتف  </td>
                                    <td class="fromTd">
                                        <input type="number" name="phone" class="form-control modalInputs" required/>                            
                                    </td>
                                </tr>
                            </table>
						    <button class="btn form-control btn-info"> Add pharmacy</button> 							
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>

		<!-- **************************************** -->

<div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header"> 
    <button class="close" data-dismiss="modal" > &times;</button>
                </div>
                    <div class="modal-body"> 
                        <form method="post" id="pharmacyForm" action="/pharmacy" enctype="multipart/form-data">
						@csrf
                        @method('PATCH')
                            <table class="modalTable table text-center">
                                <tr>
                                    <td class="captionTd"> رقم الصيدلية </td>
                                    <td class="fromTd" >
                                        <input type="number" name="pharmaciesId" class="modalInputs form-control" id="pharmaciesId"/>                                                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> اسم الصيدلية </td>
                                    <td class="fromTd">
                                        <input type="text" name="phName"  class="modalInputs form-control" id="phName"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                        <td class="captionTd"> العنوان </td>
                                    <td class="fromTd">
                                        <input type="text"  name="address" class="form-control modalInputs" id="address"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> المدير </td>
                                    <td class="fromTd">
                                        <input type="text" name="phAdmin" class="form-control modalInputs" id="phAdmin"/>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> الايميل </td>
                                    <td class="fromTd">
                                        <input type="email" name="email" class="form-control modalInputs" id="email"/>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> كلمة المرور  </td>
                                    <td class="fromTd">
                                        <input type="password" name="password" class="form-control modalInputs" id="password"/>                            
                                    </td>
                                </tr>
                                <tr>
                                    <td class="captionTd"> رقم الهاتف  </td>
                                    <td class="fromTd">
                                        <input type="number" name="phone" class="form-control modalInputs" id="phone"/>                            
                                    </td>
                                </tr>
                            </table>
							<button class="btn form-control btn-info"> Update Data</button> 							
						</form>
						 
					</div>
				</div>
	        </div>				    
	    </div>

@endsection