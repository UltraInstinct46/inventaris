<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PERPUSTAKAAN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/jenis/layout.blade.php ENDPATH**/ ?>