<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKniaYy7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKniaYy7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKniaYy7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKniaYy7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKniaYy7\App_KernelDevDebugContainer([
    'container.build_hash' => 'KniaYy7',
    'container.build_id' => 'd11e3504',
    'container.build_time' => 1612950131,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKniaYy7');
