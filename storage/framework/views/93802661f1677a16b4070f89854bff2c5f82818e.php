<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
                <h2>Tambah Ruang Baru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo e(route('ruangs.index')); ?>"> Back</a>
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
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #000000}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;}.bootstrap-iso .form-control:focus { border-color: #000000;  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 0, 0, 0.6); box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 0, 0, 0.6);} .asteriskField{color: red;}</style>
<form action="<?php echo e(route('ruangs.store')); ?>" method="POST" class="text-center border border-secondary p-5 ">
    <?php echo csrf_field(); ?>

     <div class="row ">
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <div class="form-group">
                <strong>Nama Ruang:</strong>
                <input type="text" name="nama_ruang" class="form-control bg-light" placeholder="nama_ruang">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                <textarea type="text" name="keterangan" class="form-control bg-light" placeholder="Keterangan"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('ruangs.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/ruangs/create.blade.php ENDPATH**/ ?>