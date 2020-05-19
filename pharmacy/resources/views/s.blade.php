<!DOCTYPE html>
<html>
<head>
	<title>Date range</title>
	<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
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
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery-2.2.1.min.js.js') }}"></script>
<script>
	$(document).ready(function () {
		$('.input-datarange').datepicker({
			todayBtn:'linked',
			format:'yyyy-mm-dd',
			autoClose:true
		});
</script>
</body>
</html>












