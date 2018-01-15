<?php

namespace Dhii\Invocation\UnitTest;

use Dhii\Invocation\Exception\InvocationExceptionInterface;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Invocation\Exception\InvocationExceptionInterface}.
 *
 * @since [*next-version*]
 */
class InvocationExceptionInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Invocation\Exception\InvocationExceptionInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return InvocationExceptionInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getArgs()
            ->getCallable()

            ->getTrace()
            ->getTraceAsString()
            ->getPrevious()
            ->getMessage()
            ->getCode()
            ->getFile()
            ->getLine()
            ->__toString()
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

        $this->assertInstanceOf(static::TEST_SUBJECT_CLASSNAME, $subject, 'Subject is not a valid instance.');
        $this->assertInstanceOf('Dhii\Exception\ThrowableInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Invocation\CallableAwareInterface', $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf('Dhii\Invocation\ArgsAwareInterface', $subject, 'Subject does not implement required interface');
    }
}
