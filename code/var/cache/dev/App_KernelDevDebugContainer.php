<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRKcB1PN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRKcB1PN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRKcB1PN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRKcB1PN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRKcB1PN\App_KernelDevDebugContainer([
    'container.build_hash' => 'RKcB1PN',
    'container.build_id' => '5d0b708b',
    'container.build_time' => 1680425580,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRKcB1PN');
