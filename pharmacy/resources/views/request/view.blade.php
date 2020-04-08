@extends('request.parent')
@section('main')
<a href="{{route('request.index')}}">Back </a>

<h1>Id:{{$data->id}}</h1>
<h1>Quantaty:{{$data->medicineId}}</h1>
<h1>Quantaty:{{$data->rqty}}</h1>
<h1>Company:{{$data->rcompany}}</h1>
<h1>Medicine Type:{{$data->mtype}}</h1>
@endsection