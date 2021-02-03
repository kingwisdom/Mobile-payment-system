<?php $__env->startSection('content'); ?>
<div class="agileits-inner-banner"></div>

    <div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs"><a href="<?php echo e(route('admin.home')); ?>"><i class="fa fa-home home_1"></i></a> / <span>ADMIN DASHBOARD</span></span>
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
                   
                        <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="location">
                           <h3> <?php echo e($v->name); ?></h3>
                           <p><?php echo e($v->message); ?></p>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </ul>
                </div>
                
                
            </div>
		    <div class="clearfix"></div>
             

		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transaction\resources\views/admin/view_feedbacks.blade.php ENDPATH**/ ?>