<?php

namespace Dhii\App\FuncTest\AppInterfaceTest;

use Dhii\App\AppInterface;

/**
 * Tests {@see AppInterface}.
 *
 * @since [*next-version*]
 */
class AppInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return AppInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\App\\AppInterface')
            ->getComponent()
            ->hasComponent()
            ->registerComponent()
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

        $this->assertInstanceOf('Dhii\\App\\AppInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}