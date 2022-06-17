@extends('layouts.master')
@section("title","Number Lists")
@section('content')
<div class="bg-secondary rounded h-100 p-4">
	<form class="form">
		<div class="row">
            <div class="col-md-6 col-xl-3">
				<div class="form-group">
					<label for="date">Date</label>
					<input type="date" id="date" class="form-control"
						placeholder="Enter date" name="date">
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="form-group">
					<label for="time">Time</label>
					<select class="form-select mb-3" id="time">
						<option>Select time</option>
						<option value="10:00">10:00</option>
						<option value="12:00">12:00</option>
						<option value="14:00">14:00</option>
						<option value="16:00">16:00</option>
						<option value="18:00">18:00</option>
					</select>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="form-group">
					<label for="search">Search</label><br/>
					<button type="submit" class="btn btn-success" id="search"><i class="fa fa-search"></i> Search</button>
					<!-- <button type="reset" class="btn btn-light-secondary me-1 mb-1"></button> -->
				</div>
			</div>
		</div>
	</form>
	<h6 class="mb-4">Lucky Lists</h6>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
                    <th scope="col">BTC/BUSD</th>
					<th scope="col">ETH/BUSD</th>
					<th scope="col">Number</th>
					<th scope="col">Date</th>
					<th scope="col">Time</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>22840.08</td>
					<td>1217.00</td>
					<td>00</td>
                    <td>14-05-2022</td>
					<td>10:00 </td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>22840.29</td>
					<td>1217.10</td>
					<td>21</td>
                    <td>14-05-2022</td>
					<td>12:00 </td>
				</tr>
                <tr>
					<th scope="row">3</th>
					<td>22840.90</td>
					<td>1217.20</td>
					<td>92</td>
                    <td>14-05-2022</td>
					<td>14:00 </td>
				</tr>
                <tr>
					<th scope="row">4</th>
					<td>22840.40</td>
					<td>1217.03</td>
					<td>40</td>
                    <td>14-05-2022</td>
					<td>16:00 </td>
				</tr>
                <tr>
					<th scope="row">5</th>
					<td>22840.72</td>
					<td>1217.98</td>
					<td>79</td>
                    <td>14-05-2022</td>
					<td>18:00 </td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
@section('script')
	<script>
		$(document).ready(function(){
			$(".2d-histories").addClass("active");
		});
	</script>
@endsection