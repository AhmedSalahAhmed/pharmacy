@extends('request.parent')
@section('main')
			<form action="{{route('request.destroy',$row->id)}}">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>

			</form>
			@endsection