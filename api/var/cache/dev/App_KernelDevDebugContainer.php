<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW8MI6hs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW8MI6hs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW8MI6hs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW8MI6hs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW8MI6hs\App_KernelDevDebugContainer([
    'container.build_hash' => 'W8MI6hs',
    'container.build_id' => '14cda9da',
    'container.build_time' => 1735455530,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW8MI6hs');