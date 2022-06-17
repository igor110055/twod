@extends('layouts.master')
@section("title","Dashboard")
@section('content')
<div class="row">
    <div class="col-sm-6 col-xl-3 mb-2">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-users fa-3x text-success"></i>
            <div class="ms-3">
                <p class="mb-2">Super</p>
                <h6 class="mb-0">20</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 mb-2">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-users fa-3x text-info"></i>
            <div class="ms-3">
                <p class="mb-2">Senior</p>
                <h6 class="mb-0">40</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 mb-2">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-users fa-3x text-light"></i>
            <div class="ms-3">
                <p class="mb-2">Master</p>
                <h6 class="mb-0">80</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 mb-2">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-users fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Agent</p>
                <h6 class="mb-0">100</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3 mb-2">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-users fa-3x text-warning"></i>
            <div class="ms-3">
                <p class="mb-2">Player</p>
                <h6 class="mb-0">100000</h6>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
	<script>
		$(document).ready(function(){
			$(".dashboard").addClass("active");
		});
	</script>
@endsection