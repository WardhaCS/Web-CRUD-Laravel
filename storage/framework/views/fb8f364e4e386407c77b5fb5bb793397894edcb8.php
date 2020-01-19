<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Check')); ?></div>

                <div class="card-body">
		  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Penangug Jawab</th>
        <th>Penghuni</th>
	<th>Hari</th>
	<th>Action</th>
      </tr>
    </thead>
    <tbody>
<?php $__currentLoopData = $ch; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($l->kode); ?></td>
        <td><?php echo e($l->name); ?></td>
        <td><?php echo e($l->nama); ?></td>
	<td><?php echo e($l->Hari); ?></td>
	<td>
		 <a href="/Asrama/pdf/<?php echo e($l->kode); ?>" class="btn btn-primary">Cetak</a>
		 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=#<?php echo e($l->name); ?><?php echo e($l->kode); ?>><i class="fa fa-search"></i>Edit</button>
                 <a href="/Asrama/check_hapus/<?php echo e($l->kode); ?>/<?php echo e($l->name); ?>" class="btn btn-danger">Hapus</a>
	</td>
      </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
	  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__currentLoopData = $pg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal form-popup" id=<?php echo e($p->name); ?><?php echo e($p->kode); ?>>
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
		<h3>Edit</h3>
            </div>
            <div class="modal-body">
<form method="GET" action="/Asrama/check_edit">
<input type="hidden" name="id" value=<?php echo e($p->kode); ?>>
		 <table class="table table-bordered table-sm">
		<tbody>
		<tr>	<td colspan="1"><b>No Surat</b></td>
			<td colspan="3"><?php echo e($p->kode); ?></td>
		</tr>
		<tr>
			<td colspan="1"><b>Penagung Jawab</b></td>
         	       <td colspan="3"><?php echo e($p->name); ?></td>
		</tr>
		<tr><td colspan="2"><b>Cek IN</b></td><td colspan="2"><b>Cek OUT</b></td></tr>
		<tr>
		<td colspan="2"><input type="date" name="cekin" value=<?php echo e($p->cekin); ?>></td>
		<td colspan="2"><input type="date" name="cekout" value=<?php echo e($p->cekout); ?>></td>
		</tr>
		<tr><td colspan="4"><b>Fakultas</b></td></tr>
		<tr><td colspan="4">
			<select name="fakultas">
			  <option value="Teknik Informatika" <?php if($p->fakultas=='Teknik Informatika'): ?>selected <?php endif; ?>>Teknik Informatika</option>
			  <option value="Teknik Elektro" <?php if($p->fakultas=='Teknik Elektro'): ?>selected <?php endif; ?>>Teknik Elektro</option>
			  <option value="Teknik Fisika" <?php if($p->fakultas=='Teknik Fisika'): ?>selected <?php endif; ?>>Teknik Fisika</option>
			</select>
		</td>
		</tr>
		<tr><td colspan="4"><b>Penghuni</b></td></tr>
		<?php echo e($i=0); ?>

		<tr>		
		<?php $__currentLoopData = $pg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($p->kode == $t->kode): ?>
		<td><input type="text" name=penghuni[<?php echo e($i+=1); ?>] value=<?php echo e($t->nama); ?>><input type="hidden" name=pgId[<?php echo e($i); ?>] value=<?php echo e($t->id); ?>></td>
		<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<input type="hidden" name=limit value=<?php echo e($i); ?>>
		</tr>
		<tr>
		<?php echo e($i=0); ?>

		<?php $__currentLoopData = $pg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($p->kode == $t->kode): ?>
                <td>
			 <select name=gen[<?php echo e($i+=1); ?>]>
                          <option value="L" <?php if($t->gander=='L'): ?>selected <?php endif; ?>>Laki-Laki</option>
                          <option value="P" <?php if($t->gander=='P'): ?>selected <?php endif; ?>>Perempuan</option>
                        </select>
		</td>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
		</tbody>
		</table>
		<button type="submit" class="btn btn-primary">Update</button>
</form>
            </div>
        </div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Asrama/resources/views/list.blade.php ENDPATH**/ ?>