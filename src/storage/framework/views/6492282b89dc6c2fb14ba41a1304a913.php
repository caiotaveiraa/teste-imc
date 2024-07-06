<?php $__env->startSection('resource-title', 'Usuários'); ?>
<?php $__env->startSection('dashboard-content'); ?>

<div class="table-responsive full-width">
    <?php if(session('error')): ?>
        <div class="alert alert-danger mt-2">
            <?php echo e(session('error')); ?>

        </div>

        <?php echo e(session()->forget('error')); ?>

    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success mt-2">
            <?php echo e(session('success')); ?>

        </div>

        <?php echo e(session()->forget('success')); ?>

    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nome</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">Peso (kg)</th>
                <th class="text-center">Altura (cm)</th>
                <th class="text-center">Mensagem</th>
                <th class="text-center">IMC</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if(! empty($users)): ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($user['id']); ?></td>
                        <td class="text-center"><?php echo e($user['name']); ?></td>
                        <td class="text-center"><?php echo e($user['email']); ?></td>
                        <td class="text-center"><?php echo e($user['phone']); ?></td>
                        <td class="text-center"><?php echo e($user['weight']); ?></td>
                        <td class="text-center"><?php echo e($user['height']); ?></td>
                        <td class="text-center"><?php echo e($user['message']); ?></td>
                        <td class="text-center"><?php echo e($user['imc']); ?></td>
                        <td class="text-center">
                            <form action="<?php echo e(route('users.destroy', $user['id'])); ?>" method="POST">
                                <a href="<?php echo e(route('users.edit', $user['id'])); ?>" class="btn btn-primary">Editar</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table>

    <?php if(empty($users)): ?>
        <div class="alert alert-danger mt-2">
            Não existem usuários cadastrados.
        </div>
    <?php endif; ?>
</div>

<style>
    .full-width {
        width: 121.5%;
    }
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/app/resources/views/app/list.blade.php ENDPATH**/ ?>