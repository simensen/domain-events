<?php

namespace EventCentric\DomainEvents;

use ArrayAccess;
use Countable;
use Iterator;

interface DomainEvents extends Countable, Iterator, ArrayAccess
{
    public function map(Callable $callback);
}
