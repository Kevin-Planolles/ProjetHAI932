<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerX7zW2C1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerX7zW2C1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerX7zW2C1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerX7zW2C1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerX7zW2C1\App_KernelDevDebugContainer([
    'container.build_hash' => 'X7zW2C1',
    'container.build_id' => '2feee6a5',
    'container.build_time' => 1636635474,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerX7zW2C1');
