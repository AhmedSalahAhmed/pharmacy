@extends('pharmacist.parent')
@section('main')
<a href="{{route('pharmacist.index')}}">Back</a>
<form method="post" action="{{route('pharmacist.update', $data->id)}}" enctype="multipart/form_data">
	@csrf
	@method('PATCH')
	<label>Id</label>
	<input type="text" name="id" value="{{$data->id}}" placeholder="Id">
	<label>Pharmacist Name</label>
	<input type="text" name="pharmacistName" value="{{$data->pharmacistName}}" placeholder="Pharmacist Name">
	<label>Phone Number</label>
	<input type="text" name="phoneNum" value="{{$data->phoneNum}}" placeholder="Phone Num">
	<label>Duration</label>
	<input type="text" name="duration" value="{{$data->duration}}" placeholder="Duration">
	<label>User Name</label>
	<input type="text" name="userName" value="{{$data->userName}}" placeholder="User Name">
	<label>Password</label>
	<input type="text" name="password" value="{{$data->password}}" placeholder="Passowrd">
	<input type="submit" name="edit" value="Edit">
</form>

@endsection