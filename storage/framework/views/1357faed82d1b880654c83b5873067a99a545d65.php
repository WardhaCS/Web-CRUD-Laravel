<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Pemesanan')); ?></div>

                <div class="card-body">
		<div id="add"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="add"></div>
<script>
  window.myId = "<?php echo e(Auth::user()->id); ?>"
  window.myVar = "<?php echo e(Auth::user()->name); ?>"
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Asrama/resources/views/boking.blade.php ENDPATH**/ ?>