<?php

namespace Dhii\App;

/**
 * Something that can have components registered to it.
 *
 * @since [*next-version*]
 */
interface ComponentRegistryInterface
{
    /**
     * Register a component with this instance.
     *
     * @since [*next-version*]
     *
     * @param ComponentInterface $component The component to register.
     * @param string             $code      The code to register the component with.
     *
     * @throws RuntimeException If a component with the specified code is already registered.
     *
     * @return ComponentRegistryInterface This instance.
     */
    public function registerComponent(ComponentInterface $component, $code);
}
