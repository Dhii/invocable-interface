<?php

namespace Dhii\Invocation;

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
     * @param mixed $argN An argument to the invocation.
     *
     * @return mixed The result of the invocation.
     */
    public function __invoke();
}
