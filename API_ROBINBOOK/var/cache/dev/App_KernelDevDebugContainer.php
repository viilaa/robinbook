<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMnm7D9n\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMnm7D9n/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMnm7D9n.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMnm7D9n\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMnm7D9n\App_KernelDevDebugContainer([
    'container.build_hash' => 'Mnm7D9n',
    'container.build_id' => '14d073eb',
    'container.build_time' => 1613588288,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMnm7D9n');
