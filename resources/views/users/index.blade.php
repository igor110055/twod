@extends('layouts.master')
@section("title","User Lists")
@section('content')
<div class="bg-secondary rounded h-100 p-4">
	<form class="form">
		<div class="row">
			<div class="col-md-6 col-xl-3">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" class="form-control"
						placeholder="Enter name" name="name">
				</div>
			</div>
            <div class="col-md-6 col-xl-3">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" id="phone" class="form-control"
						placeholder="Enter phone" name="phone">
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
	<h6 class="mb-4">User Lists</h6>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Username</th>
					<th scope="col">Point</th>
                    <th scope="col">Created at</th>
					<th scope="col">Detail</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Aung Aung</td>
					<td>user0001</td>
					<td>100000</td>
                    <td>14-05-2022</td>
					<td>
                        <a href="{{url('/users/1')}}"><button type="submit" class="btn btn-success w-100"><i class="fa fa-eye"></i> Detail</button></a>
                    </td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Aung Soe</td>
					<td>user0002</td>
					<td>100000</td>
                    <td>14-05-2022</td>
					<td>
                        <button type="submit" class="btn btn-success w-100"><i class="fa fa-eye"></i> Detail</button>
                    </td>
				</tr>
                <tr>
					<th scope="row">3</th>
					<td>Aung Min</td>
					<td>user0003</td>
					<td>100000</td>
                    <td>14-05-2022</td>
					<td>
                        <button type="submit" class="btn btn-success  w-100"><i class="fa fa-eye"></i> Detail</button>
                    </td>
				</tr>
                <tr>
					<th scope="row">4</th>
					<td>Aung Tint</td>
					<td>user0004</td>
					<td>100000</td>
                    <td>14-05-2022</td>
					<td>
                        <button type="submit" class="btn btn-success  w-100"><i class="fa fa-eye"></i> Detail</button>
                    </td>
				</tr>
                <tr>
					<th scope="row">5</th>
					<td>Thin Thin</td>
					<td>user0005</td>
					<td>20000</td>
                    <td>14-05-2022</td>
					<td>
                        <button type="submit" class="btn btn-success  w-100"><i class="fa fa-eye"></i> Detail</button>
                    </td>
				</tr>
				<tr>
					<td colspan="3" style="text-align:right">စုစုပေါင်း</td>
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
			$(".users").addClass("active");
		});
	</script>
@endsection