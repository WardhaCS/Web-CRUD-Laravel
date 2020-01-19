<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Chart')); ?></div>
                <div class="card-body">
		<canvas id="myChart"></canvas>
		<?php $d=1300; ?>
		
		<script>

		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
		    // The type of chart we want to create
		    type: 'bar',

		    // The data for our dataset
		    data: {
	        labels: [
		<?php $__currentLoopData = $chL; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($c->year); ?><?php echo e(','); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		],
	        datasets: [{label: 'Male', backgroundColor: 'rgb(255, 99, 132)', borderColor: 'rgb(255, 99, 132)', data: [

		<?php $__currentLoopData = $chL; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($c->jumlah); ?><?php echo e(','); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		]},
			   {label: 'Female',backgroundColor: 'rgb(255, 99, 255)',borderColor: 'rgb(255, 99, 255)',data: [
		
		<?php $__currentLoopData = $chP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($c->jumlah); ?><?php echo e(','); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		]}]},

	    // Configuration options go here
	    options: {}
	});
	</script>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Asrama/resources/views/chart.blade.php ENDPATH**/ ?>