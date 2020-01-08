<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Pegawai</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('pegawais.create')); ?>"> Tambah Pegawai</a>
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
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Nip</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $pegawais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pegawai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($pegawai->id_pegawai); ?></td>
            <td><?php echo e($pegawai->nama_pegawai); ?></td>
            <td><?php echo e($pegawai->nip); ?></td>
            <td><?php echo e($pegawai->alamat); ?></td>
            <td>
                <form action="<?php echo e(route('pegawais.destroy',$pegawai->id)); ?>" method="POST">

                    <a class="btn btn-primary" href="<?php echo e(route('pegawais.edit',$pegawai->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $pegawais->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('pegawais.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/pegawais/index.blade.php ENDPATH**/ ?>