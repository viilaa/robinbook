<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGdhsK6O\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGdhsK6O/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGdhsK6O.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGdhsK6O\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGdhsK6O\App_KernelDevDebugContainer([
    'container.build_hash' => 'GdhsK6O',
    'container.build_id' => '7c4422dc',
    'container.build_time' => 1614024524,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGdhsK6O');
