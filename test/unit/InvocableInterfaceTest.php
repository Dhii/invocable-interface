<?php

namespace Dhii\Invocation\UnitTest;

use Dhii\Invocation\InvocableInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Invocation\InvocableInterface}.
 *
 * @since [*next-version*]
 */
class InvocableInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Invocation\InvocableInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @param mixed|callable|null $return The value to return, or the function to determine that value.
     *
     * @return InvocableInterface
     */
    public function createInstance($return = null)
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->__invoke($return)
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

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.'
        );
    }

    /**
     * Tests whether the instance can be invoked as a function.
     *
     * @since [*next-version*]
     */
    public function testCanBeCalled()
    {
        $data = uniqid('result-');
        $instance = $this->createInstance($data);

        $result = $instance();

        $this->assertEquals($data, $result, 'The invocable returned a wrong result');
    }
}
