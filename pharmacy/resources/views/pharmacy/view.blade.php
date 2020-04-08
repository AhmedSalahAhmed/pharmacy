@extends('pharmacy.parent')
@section('main')
<a href="{{route('pharmacy.index')}}">Back </a>

<h1>Id:{{$data->pharmaciesId}}</h1>
<h1>Pharmacy Name:{{$data->phName}}</h1>
<h1>Pharmacy Location:{{$data->address}}</h1>
<h1>Pharmacy Admin:{{$data->phAdmin}}</h1>
<h1>Admin E-mail:{{$data->email}}</h1>
<h1>Admin Passwrd Type:{{$data->password}}</h1>
<h1>Admin Phone number:{{$data->phone}}</h1>
@endsection