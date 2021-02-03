@extends('layouts.temp')

@section('content')
<div class="agileits-inner-banner"></div>

    <div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>ADMIN DASHBOARD</span></span>
        </div>
    </div>

    <div class="container" style="margin-top:15em; margin-bottom:15em;">
            <h3 class="w3-head">Select show</h3>
        <div class="now-showing-list">
            <div class="col-md-4 movies-by-category movie-booking">
            
                <div class="movie-ticket-book">
                        <div class="bahubali-details">
                        
                        <h4>Create Vendor</h4>
                       
                        </div>
                </div>
            </div>
            <div class="col-md-8 movies-dates">	
                <div class="movie-date-selection">
                    <form action="{{ route('vendor.post') }}" method="post">
                        @csrf
                        <div class="bnr-left">
                            <label class="inputLabel">VENDOR NAME</label>
                            <input class="city" type="text" name="name" placeholder="Name" required="required">
                        </div>

                        <button type="submit">Submit</button>
                    </form>

                </div>
                
                
            </div>
		    <div class="clearfix"></div>
             

		</div>
	</div>

@endsection
