@extends('pharmacist.parent')
@section('main')

<h1>Id-{{$data->id}}</h1>
<h1>Pharmacist Name-{{$data->pharmacistName}}</h1>
<h1>Phone Number-{{$data->phoneNum}}</h1>
<h1>Duration-{{$data->duration}}</h1>
<h1>User Name-{{$data->userName}}</h1>
<h1>Password-{{$data->password}}</h1>

@endsection