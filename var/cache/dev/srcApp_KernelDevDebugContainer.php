<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEgdM84H\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEgdM84H/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEgdM84H.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEgdM84H\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerEgdM84H\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'EgdM84H',
    'container.build_id' => '4bdbb510',
    'container.build_time' => 1590093507,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEgdM84H');
