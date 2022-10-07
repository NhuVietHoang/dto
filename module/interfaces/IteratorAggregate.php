<?php
namespace module\interfaces\IteratorAggregate;
use module\interfaces\Traveserable;
interface IteratorAggregate Extends Traveserable{
    public function getIterator();
}
