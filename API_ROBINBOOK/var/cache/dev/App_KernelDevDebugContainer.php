<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM618x1V\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM618x1V/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM618x1V.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM618x1V\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerM618x1V\App_KernelDevDebugContainer([
    'container.build_hash' => 'M618x1V',
    'container.build_id' => '0aee10df',
    'container.build_time' => 1613983413,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM618x1V');
