<?php

namespace Dhii\App\FuncTest\ComponentInterfaceTest;

use Dhii\App\ComponentInterface;

/**
 * Tests {@see ComponentInterface}.
 *
 * @since [*next-version*]
 */
class ComponentInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ComponentInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\App\\ComponentInterface')
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

        $this->assertInstanceOf('Dhii\\App\\ComponentInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}