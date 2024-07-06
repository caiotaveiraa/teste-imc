<?php $__env->startSection('resource-title', ''); ?>
<?php $__env->startSection('dashboard-content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center align-greetings">
        <?php if(session('error')): ?>
            <div class="alert alert-danger mt-2">
                <?php echo e(session('error')); ?>

            </div>

            <?php echo e(session()->forget('error')); ?>

        <?php else: ?>
            <h1 class="text-center ml-5">Olá!</h1>
        <?php endif; ?>
    </div>
</div>

<style>
    .align-greetings {
        height: 100vh;
        margin-top: -50px;
        margin-left: 270px;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/app/resources/views/app/home.blade.php ENDPATH**/ ?>