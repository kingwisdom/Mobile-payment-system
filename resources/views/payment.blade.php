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
			<span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Pay</span></span>
		</div>
	</div>
    <!--Vertical Tab-->
	<!---728x90--->

	<div class="agile-pay w3layouts-content">
    <div class="container">
			<h3 class="w3-head">Payment</h3>
	<!--Horizontal Tab-->
        <div id="parentHorizontalTab" style="display: block; width: 100%; margin: 0px;">
            <ul class="resp-tabs-list hor_1">
                <li class="resp-tab-item hor_1 resp-tab-active" aria-controls="hor_1_tab_item-0" role="tab" style="background-color: white; border-color: rgb(193, 193, 193);">Credit/Debit</li>
                
            </ul>
            <div class="resp-tabs-container hor_1" style="border-color: rgb(193, 193, 193);">
                <h2 class="resp-accordion hor_1 resp-tab-active" role="tab" aria-controls="hor_1_tab_item-0" style="background: none; border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Credit/Debit</h2><div class="resp-tab-content hor_1 resp-tab-content-active" aria-labelledby="hor_1_tab_item-0" style="display:block">
                    <form action="{{ route('payment.post') }}" method="post" class="creditly-card-form agileinfo_form">
                    @csrf
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="credit-card-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name on Card</label>
													<input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Card Number</label>
															<input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="•••• •••• •••• ••••">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">CVV</label>
															<input class="security-code form-control" Â·="" inputmode="numeric" type="text" name="security-code" placeholder="•••">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Expiration Date</label>
													<input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
												</div>
											</div>
											<button type="submit" class="submit"><span>Make a payment <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></button>
										</div>
									</section>
								</form>
<!-- credit-card -->
		<script type="text/javascript" src="js/creditly.js"></script>
                    <link rel="stylesheet" href="css/creditly.css" type="text/css" media="all">

		<script type="text/javascript">
			$(function() {
			  var creditly = Creditly.initialize(
				  '.creditly-wrapper .expiration-month-and-year',
				  '.creditly-wrapper .credit-card-number',
				  '.creditly-wrapper .security-code',
				  '.creditly-wrapper .card-type');

			  $(".creditly-card-form .submit").click(function(e) {
				e.preventDefault();
				var output = creditly.validate();
				if (output) {
				  // Your validated credit card output
				  console.log(output);
				}
			  });
			});
		</script>
	<!-- //credit-card -->

                </div>
                
                <h2 class="resp-accordion hor_1" role="tab" aria-controls="hor_1_tab_item-2" style="background-color: rgb(245, 245, 245); border-color: rgb(193, 193, 193);"><span class="resp-arrow"></span>Paypal Account</h2><div class="resp-tab-content hor_1" aria-labelledby="hor_1_tab_item-2" style="border-color: rgb(193, 193, 193);">
                   
                        
						</div>
                </div>
                
            </div>
        </div>
    </div>
 </div>
	<!-- script -->
		       
  </div>
	<!---728x90--->
	

<!---728x90--->

@endsection