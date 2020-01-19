<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row justify-content-center">
	<div class="col-md-2 position-relative">
	<?php $__currentLoopData = $pr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<img src="https://asrama.itb.ac.id/img/LOGO_ITB.png" wide="100px" height="100px" alt="...">
	</div>
	
  	<div class="col-md-8">
		<h1>Peminjaman Asrama</h1>
		<h4>JL. Genesha No.10 bandung</h4>
	</div>
	<div class="col-md-4"><p><?php echo e($p->kode); ?></p></div>
        <div class="col-md-6"><p>Tanggal3 januari 2020</p></div>
	
	 <div class="col-md-12">
		<p>Yang bertandatangan di bawah ini:</p>
		<p>Nama:<?php echo e($p->name); ?></p>
		<p>Unit:<?php echo e($p->fakultas); ?></p>
		</br>
		</br>
		<p>Sebagaimana penagung jawab dan peminjaman asrama atas nama:</p>
	</div>
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Nama</th>
	      <th scope="col">Gender</th>
	      <th scope="col">Lama Tingal</th>
	      <th scope="col">Total Pembayaran</th>
	    </tr>
	  </thead>
	  <tbody>
	<?php $__currentLoopData = $ph; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	      <th><?php echo e($h->nama); ?></th>
	      <td><?php echo e($h->gander); ?></td>
	      <td><?php echo e($p->Hari); ?> Hari</td>
	      <td><?php echo e($p->Bayar); ?></td>
	    </tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  </tbody>
	</table>
	<div class="col-md-12">
	<p>Bahwa orang tersebut melakukan peminjaman asrama dari tanggal <?php echo e($p->cekin); ?> sampai dengan <?php echo e($p->cekout); ?> dengan total pembayaran <?php echo e($p->Total); ?>

Demikian hal ini kami sampaikan. Atas perhatianya dan kerjasamanya. kami mengucapkan terimakasih.</p>
	</div>

	<div class="col-md-3">
	<p>Bandung, 3 Januari 2020</p>
	</br>
	</br>
	</br>
	<p>Anton</p>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Asrama/resources/views/pdf.blade.php ENDPATH**/ ?>