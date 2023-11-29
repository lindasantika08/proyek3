

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Tenan Restoran Puja Sera</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('tenans.create')); ?>"> Tambah Tenan</a>
            </div>
        </div>
    </div>
   
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Kode Tenan</th>
            <th>Nama Tenan</th>
            <th>No. Telepon</th>
        </tr>
        <?php $__currentLoopData = $tenans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($tenan->kodeTenan); ?></td>
            <td><?php echo e($tenan->namaTenan); ?></td>
            <td><?php echo e($tenan->no_tlp); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $tenans->links(); ?>

      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tenans.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assigments_Proyek3\resources\views/tenans/index.blade.php ENDPATH**/ ?>