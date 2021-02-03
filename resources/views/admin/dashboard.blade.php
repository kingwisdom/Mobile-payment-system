@extends('layouts.temp')

@section('content')
<div class="agileits-inner-banner"></div>

    <div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>ADMIN DASHBOARD</span></span>
        </div>
    </div>

    <div class="container" style="margin-top:15em; margin-bottom:15em;">
            <h3 class="w3-head">Admin Menu</h3>
        <div class="now-showing-list">
            <div class="col-md-4 movies-by-category movie-booking">
            
                <div class="movie-ticket-book">
                        <div class="bahubali-details">
                       
                        <h3><a href="{{route('vendor.index')}}">Vendor</a></h3>
                        <hr>
                        <h3><a href="{{route('category.create')}}">Create Vendor Category</a></h3>
                       <hr>

                       <h3>View Feedbacks</h3>
                        </div>
                </div>
            </div>
           
		    <div class="clearfix"></div>
             

		</div>
	</div>

@endsection
