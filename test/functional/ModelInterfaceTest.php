<?php

namespace Dhii\App\FuncTest\ModelInterfaceTest;

use Dhii\App\ModelInterface;

/**
 * Tests {@see ModelInterface}.
 *
 * @since [*next-version*]
 */
class ModelInterfaceTest extends \Xpmock\TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModelInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\App\\ModelInterface')
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

        $this->assertInstanceOf('Dhii\\App\\ModelInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}