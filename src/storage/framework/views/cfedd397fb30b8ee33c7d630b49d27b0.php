<div class="flex items-center justify-between flex-shrink-0 px-3">
    <!-- Logo -->
    <a
        href="<?php echo e(route('dashboard')); ?>"
        class="inline-flex items-center gap-2"
    >
        <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['ariaHidden' => 'true','class' => 'w-10 h-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aria-hidden' => 'true','class' => 'w-10 h-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>

        <span class="sr-only">Dashboard</span>
    </a>

    <!-- Toggle button -->
    <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => ['type' => 'button','iconOnly' => true,'srText' => 'Toggle sidebar','variant' => 'secondary','xShow' => 'isSidebarOpen || isSidebarHovered','xOn:click' => 'isSidebarOpen = !isSidebarOpen']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','icon-only' => true,'sr-text' => 'Toggle sidebar','variant' => 'secondary','x-show' => 'isSidebarOpen || isSidebarHovered','x-on:click' => 'isSidebarOpen = !isSidebarOpen']); ?>
        <?php if (isset($component)) { $__componentOriginal6762f4f3aefcb76ed1c6bf54c111a56e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6762f4f3aefcb76ed1c6bf54c111a56e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.menu-fold-right','data' => ['xShow' => '!isSidebarOpen','ariaHidden' => 'true','class' => 'hidden w-6 h-6 lg:block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.menu-fold-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => '!isSidebarOpen','aria-hidden' => 'true','class' => 'hidden w-6 h-6 lg:block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6762f4f3aefcb76ed1c6bf54c111a56e)): ?>
<?php $attributes = $__attributesOriginal6762f4f3aefcb76ed1c6bf54c111a56e; ?>
<?php unset($__attributesOriginal6762f4f3aefcb76ed1c6bf54c111a56e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6762f4f3aefcb76ed1c6bf54c111a56e)): ?>
<?php $component = $__componentOriginal6762f4f3aefcb76ed1c6bf54c111a56e; ?>
<?php unset($__componentOriginal6762f4f3aefcb76ed1c6bf54c111a56e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginale54f5f864b1b102f78b215380e462c68 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale54f5f864b1b102f78b215380e462c68 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.menu-fold-left','data' => ['xShow' => 'isSidebarOpen','ariaHidden' => 'true','class' => 'hidden w-6 h-6 lg:block']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.menu-fold-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['x-show' => 'isSidebarOpen','aria-hidden' => 'true','class' => 'hidden w-6 h-6 lg:block']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale54f5f864b1b102f78b215380e462c68)): ?>
<?php $attributes = $__attributesOriginale54f5f864b1b102f78b215380e462c68; ?>
<?php unset($__attributesOriginale54f5f864b1b102f78b215380e462c68); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale54f5f864b1b102f78b215380e462c68)): ?>
<?php $component = $__componentOriginale54f5f864b1b102f78b215380e462c68; ?>
<?php unset($__componentOriginale54f5f864b1b102f78b215380e462c68); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['aria-hidden' => 'true','class' => 'w-6 h-6 lg:hidden']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
</div>
<?php /**PATH /var/www/app/resources/views/components/sidebar/header.blade.php ENDPATH**/ ?>