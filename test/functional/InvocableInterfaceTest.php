<?php

namespace Dhii\Invocation\FuncTest;

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
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Invocation\\InvocableInterface';

    /**
     * The invocation return value.
     *
     * @since [*next-version*]
     */
    const INVOCATION_RETURN = 'foobar';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return InvocableInterface
     */
    public function createInstance()
    {
        $returnValue = static::INVOCATION_RETURN;

        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->__invoke(function() use ($returnValue) {
                return $returnValue;
            })
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
        $instance = $this->createInstance();

        $result = $instance();

        $this->assertEquals(static::INVOCATION_RETURN, $result, '');
    }
}
