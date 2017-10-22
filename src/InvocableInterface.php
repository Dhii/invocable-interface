<?php

namespace Dhii\Invocation;

use Dhii\Invocation\Exception\InvocationExceptionInterface;

/**
 * Something that can be invoked.
 *
 * @since [*next-version*]
 */
interface InvocableInterface
{
    /**
     * Invokes this instance as a function.
     *
     * For instance:
     * If `$obj` is an instance of the implementing class, doing `$obj()` will invoke this method.
     * That pun was intended.
     *
     * @since [*next-version*]
     *
     * @param mixed $arg,... Arguments to the invocation.
     *
     * @return mixed The result of the invocation.
     *
     * @throws InvocationExceptionInterface If problem invoking.
     */
    public function __invoke();
}
