<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Jenis</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('jeniss.create')); ?>"> Tambah Jenis</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Jenis</th>
            <th>Nama Jenis</th>
            <th>Kode Jenis</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $jeniss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($jenis->id_jenis); ?></td>
            <td><?php echo e($jenis->nama_jenis); ?></td>
            <td><?php echo e($jenis->kode_jenis); ?></td>
            <td><?php echo e($jenis->keterangan); ?></td>
            <td>
                <form action="<?php echo e(route('jeniss.destroy',$jenis->id)); ?>" method="POST">

                    <a class="btn btn-primary" href="<?php echo e(route('jeniss.edit',$jenis->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $jeniss->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('jeniss.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/jeniss/index.blade.php ENDPATH**/ ?>