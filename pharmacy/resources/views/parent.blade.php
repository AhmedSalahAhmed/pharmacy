<!DOCTYPE html>
<html dir="rtl">
<head>
	<title>
		
	</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet"/>
	<link href="{{ asset('css/s.css')}}" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>

</head>
<body>
<div class="container">

	<h1>Store</h1>
	@yield('main')

</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery-2.2.1.min.js.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/public/js/bootstrap.min.js"></script>
<script>

$(document).ready(function(){
	var table = $("#datatable").DataTable();
//start store edit record
	table.on('click','.edit',function(){
		$tr = $(this).closest('tr');
		if($($tr).hasClass('child')){
			$tr = $tr.prev('.parent')
		}

		var data = table.row($tr).data();
		console.log(data);

		$('#mednum').val(data[0]);
		$('#medname').val(data[1]);
		$('#medtype').val(data[2]);
		$('#medcom').val(data[3]);
		$('#medqty').val(data[4]);
		$('#medprice').val(data[5]);
		$('#meddate').val(data[6]);
		$('#medexp').val(data[7]);


		$('#pharmaciesId').val(data[0]);
		$('#phName').val(data[1]);
		$('#address').val(data[2]);
		$('#phAdmin').val(data[3]);
		$('#email').val(data[4]);
		$('#password').val(data[5]);
		$('#phone').val(data[6]);

		$('#editForm').attr('action',"{{route('store.update',"data[0]")}}");
		$('#pharmacyForm').attr('action',"{{route('pharmacy.update',"data[0]")}}");
		$('#editModal').modal('show');
	})
});
//end store edit modal

//start pharmacy edit record
// 	table.on('click','.edit',function(){
// 		$tr = $(this).closest('tr');
// 		if($($tr).hasClass('child')){
// 			$tr = $tr.prev('.parent')
// 		}

// 		var data = table.row($tr).data();
// 		console.log(data);

// 		$('#pharmaciesId').val(data[0]);
// 		$('#phName').val(data[1]);
// 		$('#address').val(data[2]);
// 		$('#phAdmin').val(data[3]);
// 		$('#email').val(data[4]);
// 		$('#password').val(data[5]);
// 		$('#phone').val(data[6]);

// 		$('#pharmacyForm').attr('action',"{{route('pharmacy.update',"data[0]")}}");
// 		$('#editModal').modal('show');
// 	})
// });
//end pharmacy edit modal

</script>
</body>
</html>