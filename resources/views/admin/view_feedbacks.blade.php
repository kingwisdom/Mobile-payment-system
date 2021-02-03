@extends('layouts.temp')

@section('content')
<div class="agileits-inner-banner"></div>

    <div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="{{route('admin.home') }}"><i class="fa fa-home home_1"></i></a> / <span>ADMIN DASHBOARD</span></span>
        </div>
    </div>

    <div class="container" style="margin-top:15em; margin-bottom:15em;">
            <h3 class="w3-head">Select show</h3>
        <div class="now-showing-list">
            <div class="col-md-4 movies-by-category movie-booking">
            
                <div class="movie-ticket-book">
                        <div class="bahubali-details">
                        <h3 style="margin-button:30pxl">Feedbacks</h3>
                        </div>
                </div>
            </div>
            <div class="col-md-8 movies-dates">	
                <div class="movie-date-selection">
                
                    <ul>
                   
                        @foreach($feedbacks as $v)
                        <li class="location">
                           <h3> {{$v->name}}</h3>
                           <p>{{$v->message}}</p>
                        </li>
                        @endforeach
                      
                    </ul>
                </div>
                
                
            </div>
		    <div class="clearfix"></div>
             

		</div>
	</div>

@endsection
