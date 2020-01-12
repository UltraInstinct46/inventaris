<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>peminjaman</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('peminjamans.create')); ?>"> Tambah peminjaman</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>ID Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Kembali</th>
            <th>Status Peminjaman</th>
            <th>Id Pegawai</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $peminjamans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $peminjaman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($peminjaman->id_peminjaman); ?></td>
            <td><?php echo e($peminjaman->tanggal_pinjam); ?></td>
            <td><?php echo e($peminjaman->tanggal_kembali); ?></td>
            <td><?php echo e($peminjaman->status_peminjaman); ?></td>
            <td><?php echo e($peminjaman->id_pegawai); ?></td>
            <td>
                <form action="<?php echo e(route('peminjamans.destroy',$peminjaman->id)); ?>" method="POST">
                    <a class="btn btn-info"href="<?php echo e(route('peminjamans.show',$peminjaman->id)); ?>" target="_blank">Print</a>
                    <a class="btn btn-primary" href="<?php echo e(route('peminjamans.edit',$peminjaman->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $peminjamans->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('peminjamans.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/peminjamans/index.blade.php ENDPATH**/ ?>