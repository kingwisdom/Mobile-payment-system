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
                        
                        <h4>Create Vendor Category</h4>
                       
                        </div>
                </div>
            </div>
            <div class="col-md-8 movies-dates">	
                <div class="movie-date-selection">
                    <form action="{{ route('category.post') }}" method="post">
                        @csrf
                        <div class="bnr-left">
                            <label class="inputLabel">VENDOR NAME</label>
                            <select class="form-control" name="vendor_id" >
                                <option>Select Vendor</option>
                                @foreach($vendor as $v)
                                <option value="{{$v->id}}">{{$v->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="bnr-left">
                            <label class="inputLabel">CATEGORY NAME</label>
                            <input class="city" type="text" name="category_name" placeholder="Name" required="required">
                        </div>

                        <div class="bnr-left">
                            <label class="inputLabel">PRICE</label>
                            <input class="city" type="text" name="price" placeholder="Price" required="required">
                        </div>

                        <button type="submit">Submit</button>
                    </form>

                </div>
                
                
            </div>
		    <div class="clearfix"></div>
             

		</div>
	</div>

@endsection
