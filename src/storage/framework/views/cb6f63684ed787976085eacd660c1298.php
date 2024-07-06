<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar align-nav">
            <div class="position-sticky">
                <ul class="nav flex-column custom-nav">
                    <h3 class="mb-3">Dashboard</h3>

                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active" href="<?php echo e(route('users.index')); ?>">
                            Dados
                        </a>
                    </li>

                    <li class="nav-item custom-nav-item">
                        <a class="nav-link active" href="<?php echo e(route('users.create')); ?>">
                            Cadastrar usuário
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-left: 20px;">
            <h3 class="text-center mb-5 mt-2 margin-h3"><?php echo $__env->yieldContent('resource-title'); ?></h3>
            <?php echo $__env->yieldContent('dashboard-content'); ?>
        </div>
    </div>
</div>

<style>

    .align-nav {
        height: 1000vh;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #dcddde !important;
    }

    .custom-nav {
        padding: 10px;
    }

    .margin-h3 {
        margin-left: 250px;
    }

    .custom-nav-item {
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        background-color: white;
        margin-bottom: 10px;
    }

    .custom-nav-item a {
        color: #333;
    }

</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/app/resources/views/layouts/app-layout.blade.php ENDPATH**/ ?>