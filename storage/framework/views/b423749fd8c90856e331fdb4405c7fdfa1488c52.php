

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kasir Restoran Puja Sera</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('kasirs.create')); ?>"> Tambah Kasir</a>
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
            <th>Kode Kasir</th>
            <th>Nama Kasir</th>
            <th>No. Telepon</th>
        </tr>
        <?php $__currentLoopData = $kasirs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kasir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($kasir->KodeKasir); ?></td>
            <td><?php echo e($kasir->namaKasir); ?></td>
            <td><?php echo e($kasir->no_tlp); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
  
    <?php echo $kasirs->links(); ?>

      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('products.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\assigments_Proyek3\resources\views/kasirs/index.blade.php ENDPATH**/ ?>