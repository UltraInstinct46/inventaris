<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Ruang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('ruangs.create')); ?>"> Tambah Ruang</a>
            </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Ruang</th>
            <th>Nama Ruang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $ruangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ruang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($ruang->id_ruang); ?></td>
            <td><?php echo e($ruang->nama_ruang); ?></td>
            <td><?php echo e($ruang->keterangan); ?></td>
            <td>
                <form action="<?php echo e(route('ruangs.destroy',$ruang->id)); ?>" method="POST">

                    <a class="btn btn-primary " href="<?php echo e(route('ruangs.edit',$ruang->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $ruangs->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('ruangs.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/ruangs/index.blade.php ENDPATH**/ ?>