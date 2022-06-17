@extends('layouts.master')
@section("title","Bet Lists")
@section('content')
<div class="bg-secondary rounded h-100 p-4">
	<form class="form">
		<div class="row">
			<div class="col-md-6 col-xl-3">
				<div class="form-group">
					<label for="number">Number</label>
					<input type="text" id="number" class="form-control"
						placeholder="Enter number" name="number">
				</div>
			</div>
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
	<h6 class="mb-4">Bet Lists</h6>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Number</th>
					<th scope="col">Date</th>
					<th scope="col">Time</th>
					<th scope="col">Amount</th>
					<th scope="col">Name</th>
					<th scope="col">Username</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>00</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>

				</tr>
				<tr>
					<th scope="row">2</th>
					<td>01</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>02</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td>03</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td>04</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">6</th>
					<td>05</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>5000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">7</th>
					<td>06</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">8</th>
					<td>07</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>3000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">9</th>
					<td>08</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>1000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<th scope="row">10</th>
					<td>09</td>
					<td>13-5-2022</td>
					<td>10:00</td>
					<td>2000</td>
					<td>Aung Aung</td>
					<td>user0001</td>
				</tr>
				<tr>
					<td colspan="4" style="text-align:right">စုစုပေါင်း</td>
					<td>120000</td>
					<td></td>
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
			$(".bet-lists").addClass("active");
		});
	</script>
@endsection
