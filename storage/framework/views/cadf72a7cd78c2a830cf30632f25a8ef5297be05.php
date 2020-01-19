<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Login')); ?></div>

                <div class="card-body">
		  <a href="/Asrama" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/Asrama/update/<?php echo e($pg->id); ?>">
 
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('PUT')); ?>

 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama .." value=" <?php echo e($pg->name); ?>">
 
                            <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>
 
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email .." value="<?php echo e($pg->email); ?> ">
 
                             <?php if($errors->has('email')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                            <?php endif; ?>
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Asrama/resources/views/edit.blade.php ENDPATH**/ ?>