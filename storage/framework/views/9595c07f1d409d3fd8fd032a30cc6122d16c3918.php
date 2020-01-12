<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Tambah Rayon Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('peminjamans.index')); ?>"> Back</a>
        </div>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('peminjamans.store')); ?>" method="POST" class="text-center border border-black p-5">
    <?php echo csrf_field(); ?>

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Pegawai:</strong>
                <select name="id_pegawai" class="form-control">
                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id_pegawai); ?>">
                     <?php echo e($data->nama_pegawai); ?>

                   </option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Peminjaman:</strong>
                <select name="status_peminjaman" class="form-control">
                    <option value="belum dikembalikan"  >belum dikembalikan</option>
                    <option value="sudah dikembalikan"  >sudah dikembalikan</option>
                    </select>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('peminjamans.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/peminjamans/create.blade.php ENDPATH**/ ?>