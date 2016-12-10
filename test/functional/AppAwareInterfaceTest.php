<?php

namespace Dhii\App\FuncTest\AppAwareInterfaceTest;

use Dhii\App\AppAwareInterface;

/**
 * Tests {@see AppAwareInterface}.
 *
 * @since [*next-version*]
 */
class AppAwareInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return AppAwareInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\App\\AppAwareInterface')
            ->getApp()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\App\\AppAwareInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}