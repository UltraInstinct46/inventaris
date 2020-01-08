<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" align="center">
                <h2>Inventaris</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('inventariss.create')); ?>"> Tambah Inventaris</a>
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
            <th>ID Inventaris</th>
            <th>Nama</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>Id Jenis</th>
            <th>Tanggal Register</th>
            <th>id Ruang</th>
            <th>Kode Inventaris</th>
            <th>Id Petugas</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <?php $__currentLoopData = $inventariss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($inventaris->id_inventaris); ?></td>
            <td><?php echo e($inventaris->nama); ?></td>
            <td><?php echo e($inventaris->kondisi); ?></td>
            <td><?php echo e($inventaris->keterangan); ?></td>
            <td><?php echo e($inventaris->jumlah); ?></td>
            <td><?php echo e($inventaris->id_jenis); ?></td>
            <td><?php echo e($inventaris->tanggal_register); ?></td>
            <td><?php echo e($inventaris->id_ruang); ?></td>
            <td><?php echo e($inventaris->kode_inventaris); ?></td>
            <td><?php echo e($inventaris->id_petugas); ?></td>
            <td>
                <form action="<?php echo e(route('inventariss.destroy',$inventaris->id)); ?>" method="POST">

                    <a class="btn btn-primary" href="<?php echo e(route('inventariss.edit',$inventaris->id)); ?>">Edit</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <?php echo $inventariss->links(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('inventariss.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/inventariss/index.blade.php ENDPATH**/ ?>