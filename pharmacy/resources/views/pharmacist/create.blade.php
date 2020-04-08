@extends('pharmacist.parent')
@section('main')
	<a href="{{route('pharmacist.index')}}">Back </a>

<form method="post" action="{{route('pharmacist.store')}}"  enctype="multipart/form-data">
	
		@csrf
		<input type="text" name="pharmacistName" placeholder="Pharmacist Name">
		<input type="text" name="phoneNum" placeholder="Phone Number">
		<input type="text" name="duration" placeholder="Duration id">
		<input type="text" name="userName" placeholder="User Name">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="add" value="Add">
	

</form>
@endsection