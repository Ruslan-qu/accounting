<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMvtu8bB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMvtu8bB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMvtu8bB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMvtu8bB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMvtu8bB\App_KernelDevDebugContainer([
    'container.build_hash' => 'Mvtu8bB',
    'container.build_id' => '8fff58c1',
    'container.build_time' => 1702647880,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMvtu8bB');
