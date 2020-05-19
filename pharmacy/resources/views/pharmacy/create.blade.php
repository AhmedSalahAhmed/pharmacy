@extends('pharmacy.parent')
@section('main')
@if($errors->any())

<div class="alert alert-danger">
	@foreach($errors->all() as $error)
	<li>{{$error}}</li>
	@endforeach
</div>
@endif

	<div class="text-right">
		<a href="{{route('pharmacy.index')}}" class="btn btn-primary">Back </a>
	</div>
<form method="post" action="{{route('pharmacy.store')}}" enctype="multipart/form-data"  >
	@csrf
	<div class="form-group">
		<input type="text" name="pharmaciesId" placeholder="Pharmacy Id" class="form-control mt-2">
		<input type="text" name="phName" placeholder="Pharmacy name" class="form-control mt-2">
		<input type="text" name="address" placeholder="Location" class="form-control mt-2">
		<input type="text" name="phAdmin" placeholder="Pharmacy Admin" class="form-control mt-2">
		<input type="email" name="email" placeholder="E-mail" class="form-control mt-2">
		<input type="password" name="password" placeholder="Password" class="form-control mt-2">
		<input type="text" name="phone" placeholder="Phone Number" class="form-control mt-2">
		<div class="form-group text-center">
		<input type="submit" name="add" value="Add" class="btn btn-success mt-2">
		</div>
	</div>
	
</form>
@endsection