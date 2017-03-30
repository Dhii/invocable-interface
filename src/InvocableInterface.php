<?php

namespace Dhii\Util\Invocation;

/**
 * Something that can be invoked.
 *
 * @since [*next-version*]
 */
interface InvocableInterface
{
    /**
     * This method will be run when the instance is called as a function.
     *
     * For instance:
     * If `$obj` is an instance of the implementing class, doing `$obj()` will invoke this method.
     * That pun was intended.
     *
     * @since [*next-version*]
     */
    public function __invoke();
}
