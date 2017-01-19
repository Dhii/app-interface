<?php

namespace Dhii\App;

/**
 * Something that can have components.
 *
 * @since [*next-version*]
 */
interface ComponentAwareInterface
{
    /**
     * Retrieve an application component by code.
     *
     * @since [*next-version*]
     *
     * @return ComponentInterface
     */
    public function getComponent($code);

    /**
     * Determines whether or not a component with the specified code is already registered with this instance.
     *
     * @since [*next-version*]
     *
     * @param string $code The code of the component.
     *
     * @return bool True if a component with the specified code is already registered;
     *              false otherwise.
     */
    public function hasComponent($code);
}
