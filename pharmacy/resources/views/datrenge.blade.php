<!DOCTYPE html>
<html>
<head>
	<title>Date range</title>
	<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<button class="btn btn-danger">b</button>
	<div class="container">
		<div class="row input-datarange">
			<div class="col-md-4">
				<input type="text" name="from-date" id="from-date" class="form-control" placeholder="From Date" readonly>
			</div>
			<div class="col-md-4">
				<input type="text" name="to-date" id="to-date" class="form-control" placeholder="To Date" readonly>
			</div>
			<div class="col-md-4">
				<button type="button" name="filter" id="filter" class="btn-btn-primart">
					Filter
				</button>
				<button type="button" name="refresh" id="refresh" class="btn-btn-primart">
					Filter
				</button>
			</div>
			<div class="table-responsive">

				<table class="table table-bordered table-striped" id="stores">
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
				</table>
			</div>
		</div>
	</div>
<script>
	$(document).ready(function () {
		$('.input-datarange').datepicker({
			todayBtn:'linked',
			format:'yyyy-mm-dd',
			autoClose:true
		});
		load_data();

		function load_data(from_date = '', to_date = '')
		{
			$('#stores').dataTable({
				processing:true,
				serverSide:true,
				ajax:{
					url:"{{route('datrange.index')}}",
					data:{from_date:from_date, to_date:to_date}
				}
				columns[
					{
						data:'medicineId',
						name:'medicineId'
					},
					{
						data:'medicine',
						name:'medicine'
					},{
						data:'mType',
						name:'mType'
					},
					{
						data:'company',
						name:'company'
					},{
						data:'qty',
						name:'qty'
					},
					{
						data:'price',
						name:'price'
					},{
						data:'proDate',
						name:'proDate'
					},
					{
						data:'exDate',
						name:'exDate'
					},
				]
			});
		}
		$('#filter').click(function()
		{
			var from_date = $('#from_date').val();
			var to_date = $('#to_date').val();
			if (from_date!= ''&& to_date!= '') 
			{
				$('#stores').DataTable().destroy();
				load_data(from_date , to_date);
			}
			else{
				alert('Both Date Are Required');

			}
			$('#refresh').click(function()
			{
				$('#from_date').val('');
				$('#to_date').val('');
				$('#stores').DataTable().destroy();
				load_data();
			});
		});
	});
</script>

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-2.2.1.min.js.js') }}"></script>
</body>
</html>












