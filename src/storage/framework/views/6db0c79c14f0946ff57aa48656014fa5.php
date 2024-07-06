<?php if (isset($component)) { $__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.perfect-scrollbar','data' => ['as' => 'nav','ariaLabel' => 'main','class' => 'flex flex-col flex-1 gap-4 px-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('perfect-scrollbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['as' => 'nav','aria-label' => 'main','class' => 'flex flex-col flex-1 gap-4 px-3']); ?>

    <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['title' => 'Dashboard','href' => ''.e(route('dashboard')).'','isActive' => request()->routeIs('dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Dashboard','href' => ''.e(route('dashboard')).'','isActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.dashboard','data' => ['class' => 'flex-shrink-0 w-6 h-6','ariaHidden' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icons.dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-6 h-6','aria-hidden' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf)): ?>
<?php $attributes = $__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf; ?>
<?php unset($__attributesOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf)): ?>
<?php $component = $__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf; ?>
<?php unset($__componentOriginaldd7efffb9c9f6e09cb77b3f1b8d38adf); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar.link','data' => ['title' => 'Usuários','href' => ''.e(route('users.index')).'','isActive' => request()->routeIs('users.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Usuários','href' => ''.e(route('users.index')).'','isActive' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('users.index'))]); ?>
         <?php $__env->slot('icon', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-view-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-shrink-0 w-6 h-6','aria-hidden' => 'true']); ?>
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
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $attributes = $__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__attributesOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488)): ?>
<?php $component = $__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488; ?>
<?php unset($__componentOriginal1e62ea70552e2303ad88fc0b4cc5a488); ?>
<?php endif; ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460)): ?>
<?php $attributes = $__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460; ?>
<?php unset($__attributesOriginalb5c14c9e70c23a9b21ec570c5f0bc460); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460)): ?>
<?php $component = $__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460; ?>
<?php unset($__componentOriginalb5c14c9e70c23a9b21ec570c5f0bc460); ?>
<?php endif; ?>
<?php /**PATH /var/www/app/resources/views/components/sidebar/content.blade.php ENDPATH**/ ?>