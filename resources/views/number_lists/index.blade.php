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
					<label for="sort">Sorting</label>
					<select class="form-select mb-3" id="sort">
						<option value="sort_desc">ဂဏန်းငယ်စဉ်ကြီးလိုက်</option>
						<option value="sort_asc">ပမာဏကြီးစဉ်ငယ်လိုက်</option>
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
	<h6 class="mb-4">Number Lists</h6>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Number</th>
					<th scope="col">Date</th>
					<th scope="col">Time</th>
					<th scope="col">Amount</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>00</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_00"> <label for="number_00">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>01</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_01"> <label for="number_01">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>02</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_02"> <label for="number_02">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>03</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_03"> <label for="number_03">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td>04</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_04"> <label for="number_04">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">6</th>
					<td>05</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>5000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_05"> <label for="number_05">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">7</th>
					<td>06</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_06"> <label for="number_06">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">8</th>
					<td>07</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>3000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_07"> <label for="number_07">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">9</th>
					<td>08</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_08"> <label for="number_08">Terminate</label>
					</td>
				</tr>
				<tr>
					<th scope="row">10</th>
					<td>09</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>2000</td>
					<td>
						<input class="form-check-input m-0" type="checkbox" id="number_10"> <label for="number_10">Terminate</label>
					</td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:right">စုစုပေါင်း</td>
					<td>120000</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
@section('script')
	<script>
		$(document).ready(function(){
			$(".2d-number").addClass("active");
		});
	</script>
@endsection