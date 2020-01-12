<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>INVENTARIS</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/app.css')); ?>">
</head>
<body>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\inventaris\resources\views/pegawais/layout.blade.php ENDPATH**/ ?>