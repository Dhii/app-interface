<?php

namespace Dhii\App;

/**
 * Something that can represent an application.
 *
 * @since [*next-version*]
 */
interface AppInterface
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
     * Register a component with this instnace.
     *
     * @since [*next-version*]
     *
     * @param ComponentInterface $component The component to register.
     * @param string             $code      The code to register the component with.
     *
     * @throws RuntimeException If a component with the specified code is already registered.
     *
     * @return WpInterface This instance.
     */
    public function registerComponent(ComponentInterface $component, $code);

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
