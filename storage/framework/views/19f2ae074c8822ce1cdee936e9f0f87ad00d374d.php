<?php $__env->startSection('content'); ?>
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
	 

    <!--Vertical Tab-->
	<!---728x90--->

	<div class="categories-section main-grid-border" id="mobilew3layouts">
		<div class="container">
        <div class="agile-movies-select-show w3layouts-content">
    <div class="container">        
        <h3 class="w3-head">Select Your Transaction</h3>
        <div class="now-showing-list">
		<div class="col-md-4 movies-by-category movie-booking">
        
			<div class="movie-ticket-book">
					<div class="bahubali-details">
					<?php if(count($vendor) > 0): ?>
                        <?php $__currentLoopData = $vendor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h3 class="location">
                            <a href="<?php echo e(route('vendors', $v->id)); ?>"><?php echo e($v->name); ?></a>
                        </h3>
                        
						<hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <h4>No Vendor yet</h4>
                       <?php endif; ?>
						
					</div>
				</div>
			</div>
		<div class="col-md-8 movies-dates">	
			<div class="movie-date-selection">
				
				
			</div>
			
			
		</div>
		<div class="clearfix"></div>
             

	</div>	
    </div>
	</div>
		</div>
	<!-- script -->
		       
  </div>
	<!---728x90--->
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	<!-- //Categories -->


<!---728x90--->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transaction\resources\views/landing.blade.php ENDPATH**/ ?>