<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Detail Pinjam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('detailpinjams.create')); ?>"> Tambah Detail Pinjam</a>
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
            <th>ID Detail Pinjam</th>
            <th>Id Inventaris</th>
            <th>Jumlah</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $detailpinjams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailpinjam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($detailpinjam->id_detail_pinjam); ?></td>
            <td><?php echo e($detailpinjam->id_inventaris); ?></td>
            <td><?php echo e($detailpinjam->jumlah); ?></td>
            <td>
                <form action="<?php echo e(route('detailpinjams.destroy',$detailpinjam->id)); ?>" method="POST">

                    <a class="btn btn-primary" href="<?php echo e(route('detailpinjams.edit',$detailpinjam->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $detailpinjams->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('detailpinjams.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/detailpinjams/index.blade.php ENDPATH**/ ?>