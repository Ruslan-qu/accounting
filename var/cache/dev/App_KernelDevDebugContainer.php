<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKxC8nto\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKxC8nto/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKxC8nto.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKxC8nto\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKxC8nto\App_KernelDevDebugContainer([
    'container.build_hash' => 'KxC8nto',
    'container.build_id' => 'dc7cceca',
    'container.build_time' => 1705505909,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKxC8nto');
