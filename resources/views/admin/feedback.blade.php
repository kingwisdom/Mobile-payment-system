@extends('layouts.temp')

@section('content')
<!--//-->	
<div class=" header-right">
		<div class="banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div class="caption">
					          	<h3><span>Get a</span> Mobile Recharge</h3>
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
					          	<h3><span>20% off</span> on DsTV</h3>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
					          	<h3>PHCN Bills</h3>
			          		</div>
			          	</div>
			         </li>	
                      <li>
			          	 <div class="banner4">
			           		<div class="caption">
					          	<h3><span>Go Tv</h3>
			          		</div>
			          	</div>
			         </li>	
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
    <div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Confirm Payment</span></span>
		</div>
	</div>
    <!--Vertical Tab-->
	<!---728x90--->

	<div class="agile-trains w3layouts-content">
     <div class="container">
	<div class="col-md-4 bann-info1">
		<i class="train-icon fa fa-train"></i>
	</div>
	<div class="col-md-5 bann-info">
		<h3>YOUR FEEDBACK</h3>
        <div class="book-a-ticket">
							<div class=" bann-info">
								<form action="{{route('feedback.post')}}" method="post">
								@csrf
									<div class="ban-top">
										<div class="bnr-left">
											<label class="inputLabel">Name</label>
											<input class="city" type="text" placeholder="Your name" name="name" required="required">
										</div>
										
											<div class="clearfix"></div>
									</div>
									<div class="ban-top">
										<div class="bnr-left">
											<label class="inputLabel">Message</label>
											<input class="city" name="message" type="text" placeholder="Your Messahe" required="required">
										</div>
										
											<div class="clearfix"></div>
									</div>
									 
									<div class="search">
									     <input type="submit" class="submit" value="Submit">
									
									</div>
								</form>
							</div>
					</div>

	</div>
	<div class="clearfix"></div>
</div>
</div>
	<!-- script -->
		       
  </div>
	<!---728x90--->
	

<!---728x90--->

@endsection
