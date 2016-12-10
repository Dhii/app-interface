<?php

namespace Dhii\App;

/**
 * Something that can have a reference to the app retrieved.
 *
 * @since [*next-version*]
 */
interface AppAwareInterface
{
    /**
     * Retrieve the instance of the application object.
     *
     * @since [*next-version*]
     *
     * @return AppInterface The application object.
     */
    public function getApp();
}
