<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCAVrBwH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCAVrBwH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCAVrBwH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCAVrBwH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCAVrBwH\App_KernelDevDebugContainer([
    'container.build_hash' => 'CAVrBwH',
    'container.build_id' => 'd764115f',
    'container.build_time' => 1613127730,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCAVrBwH');
